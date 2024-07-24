<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Preference;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.users.create',['roles'=>Role::all(),'categories' => \App\Models\Categorie::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $input = $request->all();


        $input['password'] = Hash::make($request->password);
        $user=User::create([
            'nom' => $input['nom'],
            'prenom' => $input['prenom'],
            'email' => $input['email'],
            'password' => $input['password'],
            'adresse' => $input['adresse'],
            'telephone' => $input['telephone'],
            'cni' => $input['cni'],
            'pays' => $input['pays'],

        ]);
        $user->assignRole($request->roles);
        Preference::create([
            'user_id' => $user->id,
            'categorie_id' => $input['preference']
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token =  $user->createToken('token')->plainTextToken;
            return response()->json(['token' => $token,'code' => 200,
                'user' => $user,
            ], 200);
        }
        return response()->json(['error' => 'Unauthorised'], 401);
    }
    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
