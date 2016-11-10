<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AssignNewTask extends Notification
{
    use Queueable;
    public $project_id;
    public $project_name;
    public $project_slug;
    public $todo_content;
    public $todo_due_date;
    public $todo_status;
    public $leadership_id;
    public $leadership_name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public function __construct($project_id, $project_name,$project_slug,$todo_content, $todo_due_date, $todo_status, $leadership_id, $leadership_name)
    {
        $this->project_id = $project_id;
        $this->project_name = $project_name;
        $this->project_slug = $project_slug;
        $this->todo_content = $todo_content;
        $this->todo_due_date = $todo_due_date;
        $this->todo_status = $todo_status;
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
            'project_id' => $this->project_id,
            'project_name' => $this->project_name,
            'project_slug' =>$this->project_slug,
            'todo_content' => $this->todo_content,
            'todo_due_date' => $this->todo_due_date,
            'todo_status' => $this->todo_status,
            'leadership_id' => $this->leadership_id,
            'leadership_name' => $this->leadership_name
        ];
    }
}
