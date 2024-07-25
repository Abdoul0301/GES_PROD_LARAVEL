<?php

namespace App\Notifications;

use App\Models\Produit;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PerferNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public Produit $produit;
    public function __construct($produit)
    {
        $this->produit = $produit;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('Hello nous vous informons que votre produit preferer '.$this->produit->nom.' est de nouveau disponible.')
                    ->action('Notification Action', url('/'))
                    ->line('Merci pour votre fidelite!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
