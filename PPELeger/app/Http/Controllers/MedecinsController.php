<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecins;

class MedecinsController extends Controller
{
    public function getMedecins() {
        $medecins = Medecins::orderBy('MEDNum', 'ASC')->get();
        return view('medecins', compact('medecins'));
    }

    public function addMedecin() {
        return view('add-medecin');
    }

    public function createMedecin(Request $request) {
        $medecin = new Medecins();
        $medecin->Nom = $request->input('nom');
        $medecin->Prenom = $request->input('prenom');
        $medecin->Adresse = $request->input('adresse');
        $medecin->Email = $request->input('email');
        $medecin->Telephone = $request->input('telephone');
        $medecin->save();
        return back()->with('medecin_created', 'medecin has been created successfully');
    }

    public function editMedecin(int $id) {
        $medecin = Medecins::find($id);
        return view('edit-medecin', compact('medecin'));
    }

    public function updateMedecin(Request $request) {
        $medecin = Medecins::find($request->input('id'));
        $medecin->Nom = $request->input('nom');
        $medecin->Prenom = $request->input('prenom');
        $medecin->Adresse = $request->input('adresse');
        $medecin->Email = $request->input('email');
        $medecin->Telephone = $request->input('telephone');
        $medecin->save();
        return back()->with('medecin_updated', 'medecin has been updated successfully');
    }

    public function deleteMedecin($id) {
        Medecins::where('MEDNum', $id)->delete();
        return back()->with('medecin_deleted', 'medecin has been deleted successfully');
    }

    public function count() {
        return Medecins::count();
    }
}
