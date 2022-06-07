<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    
    public function getClients() {
        $clients = Clients::orderBy('CLINum', 'ASC')->get();
        return view('clients', compact('clients'));
    }

    public function addClient() {
        return view('add-client');
    }

    public function createClient(Request $request) {
        $client = new Clients();
        $client->Nom = $request->input('nom');
        $client->Prenom = $request->input('prenom');
        $client->Adresse = $request->input('adresse');
        $client->Email = $request->input('email');
        $client->Telephone = $request->input('telephone');
        $client->save();
        return back()->with('client_created', 'Client has been created successfully');
    }

    public function editClient(int $id) {
        $client  = Clients::find($id);
        return view('edit-client', compact('client'));
    }

    public function updateClient(Request $request) {
        $client = Clients::find($request->input('id'));
        $client->Nom = $request->input('nom');
        $client->Prenom = $request->input('prenom');
        $client->Adresse = $request->input('adresse');
        $client->Email = $request->input('email');
        $client->Telephone = $request->input('telephone');
        $client->save();
        return back()->with('client_updated', 'Client has been updated successfully');
    }

    public function deleteClient($id) {
        Clients::where('CLINum', $id)->delete();
        return back()->with('client_deleted', 'Client has been deleted successfully');
    }

    public function count() {
        return Clients::count();
    }
}
