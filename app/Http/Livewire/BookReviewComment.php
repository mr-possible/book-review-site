<?php

namespace App\Http\Livewire;

use App\Models\BookReviewCommentModel;
use App\Models\BookReviewModel;
use Livewire\Component;

class BookReviewComment extends Component
{
    public $review, $comment;

    protected $rules = [
        'comment' => 'required',
    ];

    public function mount($review)
    {
        $this->review = $review;
    }

    public function render()
    {
        return view('livewire.book-review-comment');
    }

    public function getReviews()
    {
        $this->review = BookReviewModel::with('comments')
                            ->where('id', $this->review->id)
                            ->latest()
                            ->first();
    }

    public function addComment()
    {
        $this->validate();

        BookReviewCommentModel::create([
            'review_id' => $this->review->id,
            'user_id' => \Auth::id(),
            'comment' => $this->comment,
        ]);

        $this->comment = '';
        return $this->getReviews();
    }

    public function deleteComment($id)
    {
        $comment = BookReviewCommentModel::findorFail($id);

        if (\Auth::id() !== $comment->user_id) {
            return;
        }

        $comment->delete();
        return $this->getReviews();
    }

    public function editComment($id)
    {
        // TODO
    }

    public function updateComment($id)
    {
        // TODO
    }

}
