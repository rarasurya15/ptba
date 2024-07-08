<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisteredNotification extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Selamat Bergabung!')
                    ->greeting('Halo!')
                    ->line('Selamat, Anda telah berhasil mendaftar di situs kami.')
                    ->action('Masuk ke Situs', url('/'))
                    ->line('Terima kasih telah bergabung dengan kami!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
