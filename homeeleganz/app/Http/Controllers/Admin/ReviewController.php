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
        $slug = "reviewdashboard";
        $title = "List of Reviews";
        return view('/admin/reviews/index', compact('reviews', 'title','slug'));
    }

    public function destroy($id)
    {


        $review = Review::find($id);


        // if id exists
        if ($review) {
            $review->delete();
            return redirect('/admin/reviews/')->with('danger', 'Review deleted successfully');
        } else {
            return redirect('/admin/reviews');
        }
    }
}
