<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    
    public function index()
    {
        $absen = DB::table('absen')
        ->join('semester', 'absen.id_semester', '=', 'semester.id_semester')
        ->select('absen.*', 'semester.status')
        ->where('absen', '=', 'A')
        ->get();
        return view('absen', [
            'absen' => $absen
        ]);
    }
}