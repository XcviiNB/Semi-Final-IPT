<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index() {
        $inventories = Inventory::orderby('id')->get();

        return view('inventories.index',[
            'inventories' => $inventories
        ]);
    }

    public function add() {
        return view('inventories.add');
    }

    public function store(Request $request) {
        Inventory::create([
            'name' => $request->name,
            'description' => $request->description,
            'value' => $request->value,
            'status' => $request->status,
        ]);

        return redirect('/inventories');

    }

    public function edit(Inventory $inventories) {
        return view('inventories.edit', [
            'inventories' => $inventories
        ]);
    }

    public function update(Request $request, $inventories){
        $input = $request->all();
        $inventories = Inventory::find($inventories);
        $inventories->name=$input['name'];
        $inventories->description=$input['description'];
        $inventories->value=$input['value'];
        $inventories->status=$input['status'];

        $inventories->save();
        return redirect('/inventories');
    }

    public function remove(Inventory $inventories) {
        return view('inventories.remove', [
            'inventories' => $inventories
        ]);
    }

    public function destroy($inventories){
        Inventory::find($inventories)->delete();
        return redirect('/inventories');
    }
}
