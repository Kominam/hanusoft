<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SomeOneReplyComment implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $reply_comment;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($reply_comment)
    {
        $this->reply_comment = $reply_comment;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['reply-on-comment'.$this->reply_comment->comment_id];
    }
}
