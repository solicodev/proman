<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TaskAssignedNotification extends Notification
{
    use Queueable;
    protected $task;
    /**
     * Create a new notification instance.
     */
    public function __construct($task)
    {
        $this->task = $task;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->from('info@dm.soit.ir', 'پلتفرم مدیریت پروژه سولیکو')
            ->subject( 'تسک جدید')
            ->greeting('تسک جدید به شما محول شد')
            ->line(' تسک جدید ثبت شد.' )
            ->line('پلتفرم مدیریت پروژه سولیکو');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'task_assigned',
            'data' => [
                'task_id'=>$this->task?->id,
                'task_code' => $this->task?->task_code,
                'start_date' => $this->task?->start_date,
                'end_date' => $this->task?->end_date,
                'project_id' =>$this->task?->project_id,
            ]
        ];

    }
}
