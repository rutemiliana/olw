<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with('user', 'address')->paginate(10);
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        //dd($request->all());
        //Função transaction usada quando manipulamos 2 tabelas diferentes, cria um escopo pois para existir um client, deve existir um user antes. Caso a criação do primeiro não dê certo ou o segundo, ele desfaz tudo que foi feito e não segue com a criação de ambos

        DB::transaction(function() use($request){
    
            $user = User::create([
                'email' => $request->get('email'),
                'name' => $request->get('name'),
                'password' => Hash::make('123456'),
            ]);

            $user->client()->create([
                'address_id' => $request->get('address_id'),
            ]);
        });

        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        DB::transaction(function() use($request, $client){
    
            $client->user->update([
                'email' => $request->get('email'),
                'name' => $request->get('name'),
            ]);

            $client->update([
                'address_id' => $request->get('address_id'),
            ]);
        });

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
