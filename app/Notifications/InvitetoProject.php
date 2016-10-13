<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InvitetoProject extends Notification
{
    use Queueable;
    public $leadership_name;
    public $project_name;
    public $leadership_id;
    public $project_id;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($leadership_name, $project_name, $leadership_id, $project_id)
    {
        $this->leadership_name = $leadership_name;
        $this->project_name = $project_name;
        $this->leadership_id= $leadership_id;
        $this->project_id = $project_id;
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
            'leadership_name' => $this->leadership_name,
            'project_name' => $this->project_name,
            'leadership_id' => $this->leadership_id,
            'project_id' => $this->project_id
        ];
    }

    /* public function toArray($notifiable)
    {
        return [
            'leadership_name' => $this->leadership_name,
            'project_name' => $this->project_name,
            'leadership_id' => $this->leadership_id,
            'project_id' => $this->project_id
        ];
    }*/
}
