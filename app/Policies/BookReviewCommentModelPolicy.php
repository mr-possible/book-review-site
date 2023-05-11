<?php

namespace App\Policies;

use App\Models\BookReviewCommentModel;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookReviewCommentModelPolicy
{
    use HandlesAuthorization;
    public function edit(User $user, BookReviewCommentModel $bookReviewCommentModel)
    {
        return $user->id == $bookReviewCommentModel->user_id;
    }

    public function delete(User $user, BookReviewCommentModel $bookReviewCommentModel)
    {
        return $user->id == $bookReviewCommentModel->user_id;
    }
}
