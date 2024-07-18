<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperPanier
 */
class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'produit_id',
        'quantite',
    ];

    public function client() : BelongsTo {
        return $this->belongsTo(Client::class);
    }

    public function produit() : BelongsTo {
        return $this->belongsTo(Produit::class);
    }

}
