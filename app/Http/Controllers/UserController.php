<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    /**
     * For showing the profile of a logged in user (navigated through clicking on 'My Profile' link.)
     */
    public function my_profile() {
        $reviews = \Auth::user()->bookReviews()
            ->withCount('comments', 'bookReviewUpvotes')
            ->orderByDesc('created_at')
            ->get();
        return view('livewire.user-profile', compact('reviews'));
    }

    /**
     * For showing the profile of any registered user in the website (navigated through clicking on his/her name.)
     */
    public function others_profile($user_id)
    {
        $user = User::findOrFail($user_id);
        $reviews = $user->bookReviews()
            ->withCount('comments', 'bookReviewUpvotes')
            ->orderByDesc('created_at')
            ->get();
        return view('livewire.user-profile', compact('user', 'reviews'));
    }
}
