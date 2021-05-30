<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    
    public function index()
    {
        $siswa = DB::table('siswa')
        ->select('*')
        ->get();
        return view('siswa', [
            'siswa' => $siswa
        ]);
    }
}