<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     *
     * Retrieves all reviews from the database, along with associated product
     * and user information, and passes them to the view.
     *
     * @return \Illuminate\View\View Returns a view with all reviews and additional data
     */
    public function index()
    {
        $reviews = Review::with('product', 'user')->get();
        $slug = "reviewdashboard";
        $title = "List of Reviews";
        return view('/admin/reviews/index', compact('reviews', 'title', 'slug'));
    }

    /**
     * Remove the specified review from storage.
     *
     * Finds the review by its ID and deletes it. Redirects back to the review list
     * with a success message upon successful deletion.
     *
     * @param  int  $id The ID of the review to delete
     * @return \Illuminate\Http\RedirectResponse Redirects back to the review list with a success message
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        // Check if review exists
        if ($review) {
            $review->delete();
            return redirect('/admin/reviews/')->with('danger', 'Review deleted successfully');
        } else {
            return redirect('/admin/reviews');
        }
    }
}
