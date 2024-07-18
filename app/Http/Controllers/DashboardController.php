<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use App\Notifications\ExpirationMessage;
use App\Notifications\ExpirationSoonMessage;
use Auth;
use DateInterval;
use DateTime;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        //$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        if (!auth()->check()) {
            return view('login');
        }
        $user_count = User::count();
        $produit_count = Produit::count();
        $use_all = User::all();
        $this->expirationAlert();
        $this->soonExpirationAlert();
        return view('admin.dashboard.index', [
            //'analyticsData' => $analyticsData,
            'user_count' => $user_count,
            'user_all' => $use_all,
            'produit_count' => $produit_count
        ]);
    }

    public function expirationAlert(): void
    {
        if (auth()->check()) {
            $user = User::find(Auth::user()->id);
            $produits = $user->produits;
            foreach ($produits as $produit) {
                if ($produit->date_exp < date('y-m-d')){
                    $user->notify(new ExpirationMessage($produit));
                }
            }
        }
    }

    public function soonExpirationAlert(): void
    {
        // envoyer une notification 1 semaine avant l'expiration du produit
            $now = new DateTime();
            $interval = new DateInterval('P7D');
            $date = $now->add($interval);
            $produits = Produit::whereDate('date_exp', '<', $date)->get();
            foreach ($produits as $produit) {
                $user = User::find($produit->user_id);
                $user->notify(new ExpirationSoonMessage($produit));
                $newprix=$produit->prix-($produit->prix*0.2);
                $produit->update(['nouveau_prix' => $newprix]);
            }
    }

}
