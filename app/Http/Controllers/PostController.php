<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostCategory;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use SplFileObject;

class PostController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    /**
     * Display a listing of post categories
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function categories()
    {
        // tags meta
        $this->addMetaTags("Liste des catégories d'articles",
            "Liste des catégories d'articles",
            ['article', 'post', 'conseil', 'tuto', 'tutoriel', 'technologie', 'évènement', 'video' ],
            null
        );

        $categories = PostCategory::with('posts')->orderBy('order')->get();

        return view('posts.categories', compact('categories'));
    }


    /**
     * Display a listing of post for a specified categories
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function postCategory(PostCategory $postCategory)
    {
        // tags meta
        $this->addMetaTags("Articles de la catégorie ".$postCategory->name,
            "Articles de la catégorie ".$postCategory->name,
            ['article', 'post', 'conseil', 'tuto', 'tutoriel', 'technologie', 'évènement', 'video' ],
            null
        );

        return view('posts.category', compact('postCategory'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @param  \App\Models\Post  $post
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show(PostCategory $postCategory, Post $post)
    {
        // enregistre les stats de visite
        $post->recordDisplay();

        // tags meta
        $this->addMetaTags("Article ".$post->title,
            "Article ".$post->title." : ".$post->description,
            ['article', 'post', 'conseil', 'tuto', 'tutoriel', 'technologie', 'évènement', 'video' ],
            $post->imagePath()
        );

        $shareComponent = (new \Jorenvh\Share\Share)->page(
            URL::full(),
            $post->description,
            ['class' => 'social-list-item border-primary text-primary', 'title' => $post->title],
            ' ', ' '
        )
            ->facebook()
            ->twitter()
            ->whatsapp();


        return view('posts.show', compact('post',  'shareComponent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @param  \App\Models\Post  $post
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(PostCategory $postCategory, Post $post)
    {
        // tags meta
        $this->addMetaTags("Mise à jour de l'article ".$post->title,
            "Mise à jour de l'article ".$post->title,
            ['article', 'post', 'conseil', 'tuto', 'tutoriel', 'technologie', 'évènement', 'video' ],
            null
        );

        $action = URL::route('post.update',['postCategory' => $postCategory, 'post' => $post]);
        $method = 'PATCH';
        $categories = PostCategory::all();

        return view('posts.edit', compact('action', 'method','post','categories'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        // tags meta
        $this->addMetaTags("Création d'un article ",
            "Création d'un article ",
            ['article', 'post', 'conseil', 'tuto', 'tutoriel', 'technologie', 'évènement', 'video' ],
            null
        );

        $action = URL::route('post.store');
        $method = 'POST';
        $categories = PostCategory::all();
        $post = new Post;
        $post->user_id = auth()->user()->id;
        return view('posts.edit', compact('action', 'method','post','categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param \App\Models\PostCategory $postCategory
     * @param \App\Models\Post $post
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(UpdatePostRequest $request, PostCategory $postCategory, Post $post)
    {
        try {

            $data = $request->all();

            $post->update($data);   // grace au fillable, on ne touche qu'aux champs correspondant à l'object

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($post->path())->with( ['message' => 'Article mis à jour', 'alert' => 'success']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StorePostRequest $request)
    {

        try {
            // add the slug to the data
            $data = $request->all();
            $post = Post::create($data);

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }
        return redirect($post->path())->with( ['message' => 'Article correctement créé', 'alert' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\PostCategory  $postCategory
     * @param  \App\Models\Post  $post
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(PostCategory $postCategory, Post $post)
    {
        $post->delete();

        if (request()->wantsJson())
        {
            return response(['status' => 'Your post has been deleted'],200);
        }
        return redirect(route('post.postCategory', $postCategory))->with( ['message' => 'Article supprimé', 'alert' => 'success']);
    }

    public function extract()
    {
        echo "Test";

        $file = new SplFileObject('./../database/seeders/PostsTableSeeder.php');
        $file2 = fopen('./../database/seeders/PostsTableSeeder3.php', 'w+b');


// Loop until we reach the end of the file.
        while (!$file->eof()) {
            // Echo one line from the file.
            $line =  $file->fgets();
            if( strpos( $line, '<img' ) === false )
            {
                //echo '</br>pas trouvé, ligne '.$j;
            }
            else
            {
                echo '</br>trouvé : </br>';
                $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';

                if(preg_match_all("/$regexp/", $line, $matches, PREG_SET_ORDER))
                {
                    if( !empty($matches) )
                    {
                        for ($i=0; $i < count($matches); $i++)
                        {
                            $img_src = $matches[$i][0];

                            if (strpos( $img_src, 'ZZZZZZ' ) !== false)
                            {
                                //$img_src = str_replace('ZZZZZZ',  '', $img_src);
                                $path_parts = pathinfo(str_replace('ZZZZZZ',  '', $img_src));

                                if (file_exists('./storage/photos/1/legacy/'.$path_parts['basename']))
                                {
                                    echo 'Exist -> '.$img_src.' to storage/photos/1/legacy/'.$path_parts['basename'].' </br>';
                                    //.' : copie de '.'./test/upload/'.$img_src.' vers '.'./test/dst/'.$path_parts['basename'].' </br>';
                                    //copy('./test/upload/'.$img_src, './test/dst/'.$path_parts['basename']);

                                    $line = str_replace($img_src,'storage/photos/1/legacy/'.$path_parts['basename'],$line);
                                }
                                else
                                {
                                    echo 'Not found -> '.$img_src.'</br>';
                                }
                            }
                            elseif (strpos( $img_src, 'XXXXXX' ) !== false)
                            {
                                //$img_src = ;
                                $path_parts = pathinfo(str_replace('XXXXXX',  '', $img_src));

                                if (file_exists('./storage/photos/1/legacy/'.$path_parts['basename']))
                                {
                                    //$path_parts = pathinfo($img_src);
                                    echo 'Exist -> '.$img_src.' to storage/photos/1/legacy/'.$path_parts['basename'].' </br>';
                                    // .' : copie de '.'./test/windfoil/'.$img_src.' vers '.'./test/dst/'.$path_parts['basename']
                                    //copy('./test/windfoil/'.$img_src, './test/dst/'.$path_parts['basename']);
                                    $line = str_replace($img_src,'storage/photos/1/legacy/'.$path_parts['basename'],$line);

                                }
                                else
                                {
                                    echo 'Not found -> '.$img_src.'</br>';
                                }
                            }
                            else
                            {
                                echo 'brut -> '.$img_src.'</br>';
                            }


                        }
                    }
                }

            }

            fwrite($file2, $line);

        }

        fclose($file2);

// Unset the file to call __destruct(), closing the file handle.
        $file = null;


    }


}
