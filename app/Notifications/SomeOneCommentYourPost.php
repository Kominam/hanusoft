<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SomeOneCommentYourPost extends Notification
{
    use Queueable;
    public $commenter_name;
    public $email;
    public $comment_message;
    public $post_id;
    public $post_tittle;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($commenter_name, $comment_message, $email, $post_id, $post_tittle)
    {
        $this->commenter_name =  $commenter_name;
        $this->comment_message =$comment_message;
        $this->email = $email;
        $this->post_id =$post_id;
        $this->post_tittle = $post_tittle;
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
              'commenter_name' => $this->leadership_name,
              'comment_message' => $this->comment_message,
              'email' => $this->email,
              'post_id'=> $this->post_id,
              'post_tittle' =>$this->post_tittle,
        ];
    }
}
