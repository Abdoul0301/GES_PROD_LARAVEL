<?php

namespace App\Notifications;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendClientnotification extends Notification
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
                    ->line('Bonjour Cher Client. votre produit '.$this->produit->titre.' a ete vendue a. ')
                    ->line(' Merci pour votre confiance.')
                    ->action('Notification Action', url('/'))
                    ->line('la lutte contre le gaspillage est notre priorite!');
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
