<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commandes;

class CommandesController extends Controller
{
    public function getCommandes() {
        $commandes = Commandes::orderBy('CdeNum', 'ASC')->get();
        return view('commandes', compact('commandes'));
    }

    public function addCommande() {
        return view('add-commande');
    }

    public function createCommande(Request $request) {
        $commande = new Commandes();
        $commande->MEDICNum = $request->input('medicnum');
        $commande->MEDNum = $request->input('mednum');
        $commande->CLINum = $request->input('clinum');
        $commande->DateCde = $request->input('datecde');
        $commande->Qte = $request->input('qte');
        $commande->save();
        return back()->with('commande_created', 'command has been created successfully');
    }

    public function editCommande(int $id) {
        $commande  = Commandes::find($id);
        return view('edit-commande', compact('commande'));
    }

    public function updateCommande(Request $request) {
        $commande = Commandes::find($request->input('id'));
        $commande->MEDICNum = $request->input('medicnum');
        $commande->MEDNum = $request->input('mednum');
        $commande->CLINum = $request->input('clinum');
        $commande->DateCde = $request->input('datecde');
        $commande->Qte = $request->input('qte');
        $commande->save();
        return back()->with('commande_updated', 'commande has been updated successfully');
    }

    public function deleteCommande($id) {
        commandes::where('CdeNum', $id)->delete();
        return back()->with('commande_deleted', 'commande has been deleted successfully');
    }

    public function count() {
        return commandes::count();
    }
}
