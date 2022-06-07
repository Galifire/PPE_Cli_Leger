<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacien;

class PharmacienController extends Controller
{
    public function getPharmaciens() {
        $pharmaciens = Pharmacien::orderBy('CLINum', 'ASC')->get();
        return view('pharmaciens', compact('pharmaciens'));
    }

    public function addPharmacien() {
        return view('add-pharmacien');
    }

    public function createPharmacien(Request $request) {
        $pharmacien = new Pharmacien();
        $pharmacien->Nom = $request->input('nom');
        $pharmacien->Prenom = $request->input('prenom');
        $pharmacien->Email = $request->input('email');
        $pharmacien->Telephone = $request->input('telephone');
        $pharmacien->Poste = $request->input('poste');
        $pharmacien->save();
        return back()->with('pharmacien_created', 'Pharmacien has been created successfully');
    }

    public function editPharmacien(int $id) {
        $pharmacien  = Pharmacien::find($id);
        return view('edit-pharmacien', compact('client'));
    }

    public function updatePharmacien(Request $request) {
        $pharmacien = Pharmacien::find($request->input('id'));
        $pharmacien->Nom = $request->input('nom');
        $pharmacien->Prenom = $request->input('prenom');
        $pharmacien->Email = $request->input('email');
        $pharmacien->Telephone = $request->input('telephone');
        $pharmacien->Poste = $request->input('poste');
        $pharmacien->save();
        return back()->with('pharmacien_updated', 'Pharmacien has been updated successfully');
    }

    public function deletePharmacien($id) {
        Pharmacien::where('PHNum', $id)->delete();
        return back()->with('pharmacien_deleted', 'Pharmacien has been deleted successfully');
    }

    public function count() {
        return Pharmacien::count();
    }
}
