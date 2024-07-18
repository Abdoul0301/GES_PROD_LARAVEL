<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperProduit_Commande
 */
class Produit_Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'commande_id',
        'produit_id',
        'quantite',
    ];

    public function commande() : BelongsTo
    {
        return $this->belongsTo(Commande::class);
    }

    public function produit() : BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }
}
