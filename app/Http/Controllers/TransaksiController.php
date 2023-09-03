<?php

namespace App\Http\Controllers;

use App\Models\Aplicant;
use App\Models\ApplicantReturn;
use App\Models\Loan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    function peminjaman_view(){
        $data = Aplicant::all();
        return view ('peminjaman.index', compact('data'));
    }
    function pengembalian_view(){
        $data = ApplicantReturn::all();
        return view ('pengembalian.index', compact('data'));
    }

    public function destroy_applicant($id)
    {
        $applicant = Aplicant::find($id);
        if(!$applicant){
            return "not found";
        }
        $applicant->delete();
        return redirect()->route('peminjaman.index')->with('deleted', 'Applicant data has been deleted');
    }
}
