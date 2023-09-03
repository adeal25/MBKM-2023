<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Aplicant;
use App\Models\Item;
use App\Models\Loan;
use Illuminate\Http\Request;

class TestInputController extends Controller
{
    function input_pegawai(){
        Admin::create([
            'name' => 'Burhanuddin',
            'username' => 'hanburhan',
            'password' => '0011223344',
            'position' => 'KA LAB',
            'email' => 'burhan@polindra.ac.id',
            'level' => 'petugas'
        ]);
        echo 'sukses';
    }
    function input_super_admin(){
        Admin::create([
            'name' => 'Habiburrab,an',
            'username' => 'burahan',
            'password' => '12345678',
            'position' => 'KA SEKRE',
            'email' => 'habib@polindra.ac.id',
            'level' => 'super_admin'
        ]);
        echo 'sukses';
    }
    function input_barang(){
        Item::create([
            'name' => 'Proyektor',
            'type' => 'Non Habis Pakai',
            'condition' => 'Bagus',
            'quantity' => '10',
            'admin_id' => '1'
            
        ]);
        echo 'sukses';
    }
    function input_peminjaman(){
        Aplicant::create([
            'start_date' => '2023-09-01',
            'end_date' => '2023-09-05',
            'status' => 'Dipinjam',
            'student_id' => '12',
            'admin_id' => '1'
            
        ]);
        echo 'sukses';
    }

    function test_input(Request $request){
        Item::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'condition'=>$request->input('condition'),
            'quantity'=>$request->input('quantity'),
            'admin_id'=>$request->input('admin_id')
        ]);
        echo 'sukses';
    }

    function form(){
        return view('test_form');
    }

    function table(){
        $data = Item::all('Item');
        // $data = Item::where('condition', 'Baik')->get();
        $data = Item::where('condition', 'Baik')->where('quantity', '<', 999)->orderBy('name') ->get();
        // dd($data);
        return view('testing-table', compact('data'));
    }
}
