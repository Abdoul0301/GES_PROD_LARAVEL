<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $libelle
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Preference> $preferences
 * @property-read int|null $preferences_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Produit> $produits
 * @property-read int|null $produits_count
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperCategorie {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $num_commande
 * @property int $user_id
 * @property string $montant
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Produit> $produits
 * @property-read int|null $produits_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereMontant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereNumCommande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperCommande {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $status
 * @property string $contenue
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereContenue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperNotification {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $produit_id
 * @property int $quantite
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Produit $produit
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Panier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Panier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Panier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereProduitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereQuantite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPanier {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $categorie_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Categorie $categorie
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Preference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Preference newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Preference query()
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereCategorieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPreference {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $titre
 * @property string $image
 * @property int $categorie_id
 * @property int $user_id
 * @property int $prix
 * @property int|null $nouveau_prix
 * @property string $statut
 * @property string|null $date_fab
 * @property string $date_exp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Categorie $categorie
 * @method static \Illuminate\Database\Eloquent\Builder|Produit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereCategorieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereDateExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereDateFab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereNouveauPrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereStatut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereTitre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperProduit {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $produit_id
 * @property int $commande_id
 * @property int $quantite
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Commande $commande
 * @property-read \App\Models\Produit $produit
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande query()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande whereCommandeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande whereProduitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande whereQuantite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit_Commande whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperProduit_Commande {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $produit_id
 * @property int $quantite
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Produit $produit
 * @method static \Illuminate\Database\Eloquent\Builder|Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock query()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereProduitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereQuantite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperStock {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 * @property string $telephone
 * @property string $cni
 * @property string|null $pays
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Preference> $preferences
 * @property-read int|null $preferences_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

