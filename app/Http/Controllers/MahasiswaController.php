<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    
    public function index(){
        $data = Student::orderBy('created_at', 'DESC')->get();
        return view('mahasiswa.index', compact('data'));
    }

    function mahasiswa_add(Request $request){
        Student::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'nim' => $request->input('nim'),
            'email' => $request->input('email'),
            'department' => $request->input('department'),
            'class' => $request->input('class'),
            
        ]);
        return redirect('mahasiswa')->with('success', 'Student added successfully');
    }

    function form_add(){
        return view('mahasiswa.mahasiswa_create');

    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if(!$student){
            return "not found";
        }
        $student->delete();
        return redirect()->route('mahasiswa.index')->with('deleted', 'Student data has been deleted');
    }
}
