<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;


class MarkTaskDone extends Notification
{
    use Queueable;
    public $project_id;
    public $project_name;
    public $project_slug;
    public $todo_id;
    public $todo_content;
    public $todo_due_date;
    public $maker_id;
    public $maker_name;
    public $created_at;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($project_id, $project_name,$project_slug,$todo_id, $todo_content, $todo_due_date, $maker_id, $maker_name)
    {
        $this->project_id = $project_id;
        $this->project_name = $project_name;
        $this->project_slug = $project_slug;
        $this->todo_id = $todo_id;
        $this->todo_content = $todo_content;
        $this->todo_due_date = $todo_due_date;
        $this->maker_id = $maker_id;
        $this->maker_name = $maker_name;
        $this->created_at = Carbon::now();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['broadcast', 'database'];
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
            'todo_id' => $this->todo_id,
            'todo_content' =>$this->todo_content,
            'todo_due_date' => $this->todo_due_date,
            'marker_id' => $this->maker_id,
            'marker_name' => $this->maker_name,
            'created_at' => $this->created_at
        ];
    }
}
