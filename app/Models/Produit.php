<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin IdeHelperProduit
 */
class Produit extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveImage($request): mixed
    {
        $data = $request->validated();
        $image = $request->validated('image');
        if ($image != null && !$image->getError()) {
            if ($this->image) {
                Storage::disk('public')->delete($this->image);
            }
            $data['image'] = $image->store('produits', 'public');
        }
        return $data;
    }

    public function categorie(): BelongsTo {
        return $this->belongsTo(Categorie::class);
    }

public function stock(){
    return $this->hasMany(Stock::class);
}
public function getstock(){
    return $this->stock()->first();
}


}
