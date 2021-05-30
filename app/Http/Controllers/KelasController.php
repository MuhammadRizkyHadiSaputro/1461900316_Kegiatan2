<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class KelasController extends Controller
{
    
    public function index()
    {

        $kelas = DB::table('kelas')
        ->select('*')
        ->get();
        return view('kelas', [
            'kelas' => $kelas
        ]);
    }
}