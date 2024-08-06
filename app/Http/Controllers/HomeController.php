<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; 
use App\Models\UangKas; 
use App\Models\PresensiPiket; 
use App\Models\Aspirasi; 
use App\Models\BerkasProgram;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_mahasiswa = Mahasiswa::latest()->get();
        $count_mahasiswa = $data_mahasiswa->count();
        
        $data_uang_kas = UangKas::latest()->get();
        $count_uang_kas = $data_uang_kas->count();
        $total_uang_kas = $data_uang_kas->sum('nominal_bayar');

        $data_presensi_piket = PresensiPiket::latest()->get();
        $count_presensi_piket = $data_presensi_piket->count();

        $data_aspirasi = Aspirasi::latest()->get();
        $count_aspirasi = $data_aspirasi->count();

        $data_berkas_program = BerkasProgram::latest()->get();
        $count_berkas_program = $data_berkas_program->count();

        //render view with transactions
        return view('dashboard.home',
        ['count_mahasiswa' => $count_mahasiswa,
        'count_uang_kas' => $count_uang_kas,
        'total_uang_kas' => $total_uang_kas,
        'count_presensi_piket' => $count_presensi_piket,
        'count_aspirasi' => $count_aspirasi,
        'count_berkas_program' => $count_berkas_program,   
    
        ]);
    }   
}
