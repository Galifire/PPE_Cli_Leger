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
        ddd($request);
        Clients::where('CLINum', $num)->update([
            'Nom' => $request->input['nom'],
            'Prenom' => $request->input['prenom'],
            'Adresse' => $request->input['adresse'],
            'Email' => $request->input['email']
        ])->save();
    }

    public function store($request) {
        Clients::insert([
            'CLINum' => $_POST['CLINum'],
            'Nom' => $_POST['Nom'],
            'Prenom' => $_POST['Prenom'],
            'Adresse' => $_POST['Adresse'],
            'Email' => $_POST['Email']
        ])->save();
    }

    public function remove($request) {
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
