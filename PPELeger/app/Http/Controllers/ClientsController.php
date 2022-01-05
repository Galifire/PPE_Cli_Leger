<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    public function show() {
        return Clients::all();
    }

    public function update($num, Request $request) {
        $client = Client::where('CLINum', $num)
        ->update('Nom', $request->Nom)
        ->update('Prenom', $request->Prenom)
        ->update('Adresse', $request->Adresse)
        ->update('Email', $request->Email)
        ->save();
    }

    public function store(Request $request) {
        $client = new Client();
        $client->CLINum = $request->CLINum;
        $client->Nom = $request->Nom;
        $client->Prenom = $request->Prenom;
        $client->Adresse = $request->Adresse;
        $client->Email = $request->Email;
        $client->save();
    }

    public function remove($num) {
        $client = Client::where('CLINum', $num)->get();
        $client->delete();
    }

    public function findById($id) {
        $client = Client::where('CLINum', $id)->get();
        return $client;
    }

    public function count() {
        return Client::count();
    }
}
