<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UpdateState extends Notification
{
    use Queueable;
    public $project_id;
    public $project_name;
    public $project_slug;
    public $state_id;
    public $state_content;
    public $leadership_id;
    public $leadership_name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($project_id, $project_name, $project_slug, $state_id, $state_content,$leadership_id, $leadership_name)
    {
        $this->project_id = $project_id;
        $this->project_name = $project_name;
        $this->project_slug = $project_slug;
        $this->state_id = $state_id;
        $this->state_content = $state_content;
        $this->leadership_id = $leadership_id;
        $this->leadership_name = $leadership_name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['broadcast','database'];
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
            'project_id' => $this->project_id,
            'project_name' => $this->project_name,
            'project_slug' =>$this->project_slug,
            'state_id' => $this->state_id,
            'state_content' => $this->state_content,
            'leadership_id' => $this->leadership_id,
            'leadership_name' => $this->leadership_name
        ];
    }
}
