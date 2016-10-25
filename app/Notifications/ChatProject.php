<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ChatProject extends Notification
{
    use Queueable;
    public $member_name;
    public $message;
    public $member_avt;
    public $project_chat_name;
    public $project_chat_id;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($member_name, $message, $member_avt, $project_chat_name, $project_chat_id)
    {
        $this->member_name = $member_name;
        $this->message = $message;
        $this->member_avt = $member_avt;
        $this->project_chat_name = $project_chat_name;
        $this->project_chat_id = $project_chat_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', 'https://laravel.com')
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'member_name' => $this->member_name,
            'message' => $this->message,
            'member_avt' => $this->member_avt,
            'project_chat_name' => $this->project_chat_name,
            'project_chat_id' => $this->project_chat_id
        ];
    }
}
