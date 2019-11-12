<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\DataSiswa;
use App\User;

class NewItem extends Notification
{
    use Queueable;
    protected $sis;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sis)
    {
        $this->sis=$sis;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'sis'  => $this->sis,
         ];
    }
}
