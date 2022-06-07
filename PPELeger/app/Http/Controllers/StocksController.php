<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stocks;
class StocksController extends Controller
{
    public function getStocks() {
        $stocks = Stocks::orderBy('StockNum', 'ASC')->get();
        return view('stocks', compact('stocks'));
    }

    public function addStock() {
        return view('add-stock');
    }

    public function createStock(Request $request) {
        $stock = new Stocks();
        $stock->PHARNum = $request->input('pharnum');
        $stock->MEDICNum = $request->input('medicnum');
        $stock->Qte = $request->input('qte');
        $stock->save();
        return back()->with('stock_created', 'Stock has been created successfully');
    }

    public function editStock(int $id) {
        $stock  = Stocks::find($id);
        return view('edit-stock', compact('stock'));
    }

    public function updateStock(Request $request) {
        $stock = Stocks::find($request->input('id'));
        $stock->PHARNum = $request->input('pharnum');
        $stock->MEDICNum = $request->input('medicnum');
        $stock->Qte = $request->input('qte');
        $stock->save();
        return back()->with('stock_updated', 'Stock has been updated successfully');
    }

    public function deleteStock($id) {
        Stocks::where('StockNum', $id)->delete();
        return back()->with('stock_deleted', 'Stock has been deleted successfully');
    }

    public function count() {
        return Stocks::count();
    }
}
