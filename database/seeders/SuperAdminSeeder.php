<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([

            'nom' => 'diallo',
            'prenom' => 'Pape Mor',
            'adresse' => 'Rufisque',
            'telephone' => '770986546',
            'cni' => '123456789',
            'pays' => 'SENEGAL',
            'email' => 'pmd@gmail.com',
            'password' => Hash::make('passer')
        ]);
        //$superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $client = User::create([
            'nom' => 'djite',
            'prenom' => 'Diarra',
            'adresse' => 'keur massar',
            'telephone' => '770986543',
            'cni' => '123456789',
            'pays' => 'SENEGAL',
            'email' => 'diarra@gmail.com',
            'password' => Hash::make('passer')
        ]);
       // $client->assignRole('client');
    }
}
