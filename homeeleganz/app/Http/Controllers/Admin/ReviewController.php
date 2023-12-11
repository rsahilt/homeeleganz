<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index()
    {
        // $reviews = Review::all();
        $reviews = Review::with('product', 'user')->get();
        $title = "List of Reviews";

        return view('/admin/reviews/index', compact('reviews', 'title'));
    }

    public function destroy($id)
    {


        $review = Review::find($id);


        // if id exists
        if ($review) {
            $review->delete();
            //set success flash message
            $flash = [
                'type' => 'success',
                'message' => 'review succesfully deleted!'
            ];
            return redirect('/admin/reviews/')->with(['flash' => $flash]);
        } else {
            //set error flash message
            $flash = [
                'type' => 'danger',
                'message' => 'No matching record to delete!'
            ];
            return redirect('/admin/reviews')->with(['flash' => $flash]);
        }
    }
}
