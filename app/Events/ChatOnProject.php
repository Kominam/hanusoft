<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatOnProject implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;
    public $member_name;
    public $member_id;
    public $message;
    public $project_chat_id;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($member_name, $member_id,$message, $project_chat_id)
    {
        $this->member_name = $member_name;
        $this->member_id = $member_id;
        $this->message = $message;
        $this->project_chat_id = $project_chat_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['chat-abt-project'.$this->project_chat_id];
    }
}
