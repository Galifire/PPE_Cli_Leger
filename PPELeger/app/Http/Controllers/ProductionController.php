<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function getProductions() {
        $productions = Production::orderBy('PRODNum', 'ASC')->get();
        return view('productions', compact('productions'));
    }

    public function addProduction() {
        return view('add-production');
    }

    public function createProduction(Request $request) {
        $production = new Production();
        $production->MEDICNum = $request->input('medicnum');
        $production->DateProd = $request->input('dateprod');
        $production->Qte = $request->input('qte');
        $production->save();
        return back()->with('production_created', 'Production has been created successfully');
    }

    public function editProduction(int $id) {
        $production  = Production::find($id);
        return view('edit-production', compact('production'));
    }

    public function updateProduction(Request $request) {
        $production = Production::find($request->input('id'));
        $production->MEDICNum = $request->input('medicnum');
        $production->DateProd = $request->input('dateprod');
        $production->Qte = $request->input('qte');
        $production->save();
        return back()->with('production_updated', 'Production has been updated successfully');
    }

    public function deleteProduction($id) {
        Production::where('PRODNum', $id)->delete();
        return back()->with('production_deleted', 'Production has been deleted successfully');
    }

    public function count() {
        return Production::count();
    }
}
