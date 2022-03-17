<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Device;
use App\Models\Review;
use Html2Text\Html2Text;
use Illuminate\Support\Facades\URL;

class ReviewController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Review::class, 'review');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Review $review)
    {
        $action = URL::route('review.update',['review' => $review]);
        $method = 'PATCH';

        return view('reviews.edit', compact('action', 'method','review'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create(Device $device)
    {
        $action = URL::route('review.store');
        $method = 'POST';

        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->device_id = $device->id;

        return view('reviews.edit', compact('action', 'method','review'));
    }

    /**
     * Show the form for citing an existing review.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function cite(Review $referReview)
    {
        $this->authorize('answer', $referReview->device);


        $action = URL::route('review.store');
        $method = 'POST';

        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->device_id = $referReview->device->id;
        $html = new Html2Text($referReview->body);

        $review->body = '[quote="'.$referReview->owner->name.'"]'.$html->getText().'[/quote]';

        return view('reviews.edit', compact('action', 'method','review'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewRequest  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        try {
            $data = $request->all();
            //dd($data);
            $review->update($data);   // grace au fillable, on ne touche qu'aux champs correspondant à l'object

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($review->device->path());
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReviewRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreReviewRequest $request)
    {
        try {

            $data = $request->all();
            $review = Review::create($data);

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "I'm sorry, impossible to store you item at the moment");
        }

        return redirect($review->device->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $target = $review->device->path();
        $review->delete();

        if (request()->wantsJson())
        {
            return response(['status' => 'Your review has been deleted'],200);
        }
        return redirect($target);
    }
}
