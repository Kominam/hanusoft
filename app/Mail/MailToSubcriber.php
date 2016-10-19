<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Post;

class MailToSubcriber extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $popular_posts;
    public function __construct()
    {
        $this->popular_posts =Post::get()->sortByDesc(function($post)
                {
                    return $post->comments->count();
                })->take(5);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->from('gemini.wind285@gmail.com','Admin')->subject('Hanusoft')->view('email.subcriber');
    }
}
