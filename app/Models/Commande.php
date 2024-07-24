<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperCommande
 */
class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'num_commande',
        'montant',
         'statut',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function produits(): HasMany
    {
        return $this->hasMany(Produit_Commande::class);
    }
}
