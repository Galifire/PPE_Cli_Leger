<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicaments;

class MedicamentsController extends Controller
{
    public function getMedicaments() {
        $medicaments = Medicaments::orderBy('MEDICNum', 'ASC')->get();
        return view('medicaments', compact('medicaments'));
    }

    public function addMedicament() {
        return view('add-medicament');
    }

    public function createMedicament(Request $request) {
        $medicament = new Medicaments();
        $medicament->Nom = $request->input('nom');
        $medicament->Restrictions = $request->input('restrictions');
        $medicament->Caracteristiques = $request->input('caracteristiques');
        $medicament->DelaiProduction = $request->input('delaiprod');
        $medicament->save();
        return back()->with('medicament_created', 'medicament has been created successfully');
    }

    public function editMedicament(int $id) {
        $medicament = Medicaments::find($id);
        return view('edit-medicament', compact('medicament'));
    }

    public function updateMedicament(Request $request) {
        $medicament = Medicaments::find($request->input('id'));
        $medicament->Nom = $request->input('nom');
        $medicament->Restrictions = $request->input('restrictions');
        $medicament->Caracteristiques = $request->input('caracteristiques');
        $medicament->DelaiProduction = $request->input('delaiprod');
        $medicament->save();
        return back()->with('medicament_updated', 'medicament has been updated successfully');
    }

    public function deleteMedicament($id) {
        Medicaments::where('MEDICNum', $id)->delete();
        return back()->with('medicament_deleted', 'medicament has been deleted successfully');
    }

    public function count() {
        return Medicaments::count();
    }
}
