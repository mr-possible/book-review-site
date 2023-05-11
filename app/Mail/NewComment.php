<?php

namespace App\Mail;

use App\Models\BookReviewCommentModel;
use App\Models\BookReviewModel;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewComment extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        protected User $user,
        protected BookReviewModel $bookReviewModel,
        protected BookReviewCommentModel $bookReviewCommentModel,
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your book review got a new comment!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.new_comment_notif_email',
            with: [
                'comment' => $this->bookReviewCommentModel->comment,
                'review_title' => $this->bookReviewModel->book_review_title,
                'username' => User::findOrFail($this->bookReviewCommentModel->user_id),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
