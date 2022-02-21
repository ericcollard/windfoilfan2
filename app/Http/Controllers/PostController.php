<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use App\Models\Post;
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function categories()
    {
        $categories = PostCategory::with('posts')->orderBy('order')->get();

        return view('posts.categories', compact('categories'));
    }


    /**
     * Display a listing of post for a specified categories
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function postCategory(PostCategory $postCategory)
    {
        return view('posts.category', compact('postCategory'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @param  \App\Models\Post  $post
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show(PostCategory $postCategory, Post $post)
    {
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(PostCategory $postCategory, Post $post)
    {
        $action = URL::route('post.update',['postCategory' => $postCategory, 'post' => $post]);
        $method = 'PATCH';
        $categories = PostCategory::all();

        return view('posts.edit', compact('action', 'method','post','categories'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostCategory  $postCategory
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, PostCategory $postCategory, Post $post)
    {
        try {

            $this->validate($request, [
                'title'        => 'required',
                'body'        => 'required',
                'post_categories_id' => 'required|exists:post_categories,id',
            ]);

            $data = $request->all();

            $post->update($data);   // grace au fillable, on ne touche qu'aux champs correspondant à l'object

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($post->path());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        try {
            $this->validate($request, [
                'title'        => 'required',
                'body'        => 'required',
                'post_categories_id' => 'required|exists:post_categories,id',
            ]);

            // add the slug to the data
            $data = $request->all();

            $post = Post::create($data);

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }
        return redirect(route('post.show',['post' => $post]))->with('flash', 'Your device has been created!');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\PostCategory  $postCategory
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(PostCategory $postCategory, Post $post)
    {
        $post->delete();

        if (request()->wantsJson())
        {
            return response(['status' => 'Your post has been deleted'],200);
        }
        return redirect(route('post.postCategory', $postCategory))->with('flash', 'Your gear has been deleted!');
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
