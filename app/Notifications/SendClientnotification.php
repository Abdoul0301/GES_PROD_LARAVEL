<?php

namespace App\Notifications;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\Client;
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
    public Commande $commande;

    public function __construct($commande)
    {
        $this->commande = $commande;

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
                    ->line('Bonjour Cher Client. nous vous informons que votre commande a bien ete prise en compte voici le numero du commande '.$this->commande->num_commande.' nous informerons lorsque la commande sera en cours de livraison. ')
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
