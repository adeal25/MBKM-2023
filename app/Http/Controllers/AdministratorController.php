<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{


    function user(){
        return view('administrator.user');
    }

    // function index(){
    //     Student::create([
    //         'name' => 'Ade Alvi',
    //         'nim' => 2105002,
    //         'email' => 'adealvi@student.polindra.ac.id',
    //         'department' => 'Teknik Informatika',
    //         'class' => 'D4 RPL 3A'
    //     ]);
    //     echo 'sukses';
    // }

    // function mahasiswa(){
    //     $data = Student::where('department', 'Teknik Informatika')->get();
    //     return view('administrator.mahasiswa', compact('data'));
    // }

    function admin(){
        $data = Admin::where('level', '=', 'petugas')->orderBy('name')->get();
        return view('administrator.admin', compact('data'));
    }

    function petugas_add(Request $request){
        Admin::create([
            'name'=>$request->input('name'),
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'position'=>$request->input('position'),
            'email'=>$request->input('email'),
            'level'=>$request->input('level')
        ]);
        return redirect('petugas')->with('success', 'Student added successfully');
    }
    function form_add_admin(){
        return view('administrator.petugas_create');
    }
    function super_admin(){
        $data = Admin::where('level', '=', 'super_admin')->orderBy('name')->get();
        return view('administrator.super-admin', compact('data'));
    }
    function super_admin_add(Request $request){
        Admin::create([
            'name'=>$request->input('name'),
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'position'=>$request->input('position'),
            'email'=>$request->input('email'),
            'level'=>$request->input('level')
        ]);
        return redirect('super_admin')->with('success', 'Student added successfully');
    }

    function form_add_super_admin(){
        return view('administrator.super-admin_create');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        if(!$admin){
            return "not found";
        }
        $admin->delete();
        return redirect()->route('petugas.index')->with('deleted', 'Admin data has been deleted');
    }


}
