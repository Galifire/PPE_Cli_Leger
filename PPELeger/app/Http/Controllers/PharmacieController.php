<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacie;

class PharmacieController extends Controller
{
    public function getPharmacies() {
        $pharmacies = Pharmacie::orderBy('PHARNum', 'ASC')->get();
        return view('pharmacies', compact('pharmacies'));
    }

    public function addPharmacie() {
        return view('add-pharmacie');
    }

    public function createPharmacie(Request $request) {
        $pharmacie = new Pharmacie();
        $pharmacie->Adresse = $request->input('adresse');
        $pharmacie->Ville = $request->input('ville');
        $pharmacie->Effectif = $request->input('effectif');
        $pharmacie->Horaires = $request->input('horaires');
        $pharmacie->save();
        return back()->with('pharmacie_created', 'Pharmacien has been created successfully');
    }

    public function editPharmacie(int $id) {
        $pharmacie  = Pharmacie::find($id);
        return view('edit-pharmacie', compact('pharmacie'));
    }

    public function updatePharmacie(Request $request) {
        $pharmacie = Pharmacie::find($request->input('id'));
        $pharmacie->Adresse = $request->input('adresse');
        $pharmacie->Ville = $request->input('ville');
        $pharmacie->Effectif = $request->input('effectif');
        $pharmacie->Horaires = $request->input('horaires');
        $pharmacie->save();
        return back()->with('pharmacie_updated', 'Pharmacien has been updated successfully');
    }

    public function deletePharmacie($id) {
        Pharmacien::where('PHARNum', $id)->delete();
        return back()->with('pharmacie_deleted', 'Pharmacien has been deleted successfully');
    }

    public function count() {
        return Pharmacien::count();
    }
}