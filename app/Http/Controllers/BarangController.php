<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class BarangController extends Controller
{



    // function form(){
    //     return view('barang.create');
    // }

    // public function destroy(Item $post)
    // {
    //     Item::destroy($post->id);
    //     return redirect('/barang')->with('success', 'Item has been deleted');

    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Item::orderBy('created_at', 'DESC')->get();
        return view('barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Item::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'condition'=>$request->input('condition'),
            'quantity'=>$request->input('quantity'),
            'admin_id'=>$request->input('admin_id')
        ]);
        return redirect('barang')->with('success', 'Item added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $item = Item::find($id);
        // dd($item);
        return view('barang.edit', [
            'item'=>$item
        ]);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        if(!$item){
            return "not found";
        }
        $item->delete();
        return redirect()->route('barang.index')->with('deleted', 'Item data has been deleted');
    }
}
