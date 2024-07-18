<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin IdeHelperCategorie
 */
class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'image'];

    public function produits(): hasMany
    {
        return $this->hasMany(Produit::class);
    }

    public function saveImage($request): mixed
    {
        $data = $request->validated();
        $image = $request->validated('image');
        if ($image != null && !$image->getError()) {
            if ($this->image) {
                Storage::disk('public')->delete($this->image);
            }
            $data['image'] = $image->store('categories', 'public');
        }
        return $data;
    }

    public function preferences(): hasMany
    {
        return $this->hasMany(Preference::class);
    }

}
