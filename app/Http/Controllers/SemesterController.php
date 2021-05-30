<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class SemesterController extends Controller
{
    
    public function index()
    {
        $semester = DB::table('semester')
        ->join('absen', 'semester.id_semester', '=', 'absen.id_semester')
        ->select('absen.*', 'semester.*')
        ->where('semester.status', 'like', '%0%')
        ->get();
        return view('semester', [
            'semester' => $semester
        ]);
    }
}