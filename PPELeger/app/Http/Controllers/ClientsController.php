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
        $client = Clients::where('CLINum', $num)
        ->update('Nom', $request->Nom)
        ->update('Prenom', $request->Prenom)
        ->update('Adresse', $request->Adresse)
        ->update('Email', $request->Email)
        ->save();
    }

    public function store(Request $request) {
        $res = Clients::insert([
            'CLINum' => $_POST['CLINum'],
            'Nom' => $_POST['Nom'],
            'Prenom' => $_POST['Prenom'],
            'Adresse' => $_POST['Adresse'],
            'Email' => $_POST['Email']
        ]);
    }

    public function remove(Request $request) {
        $client = Clients::where('CLINum', $num)->get();
        $client->delete();
    }

    public function findById($id) {
        $client = Clients::where('CLINum', $id)->get();
        return $client;
    }

    public function count() {
        return Clients::count();
    }
}
