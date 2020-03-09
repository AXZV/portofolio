<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {   
        $this->middleware(['auth']);
    }
    public function index()
    {   
        return view('/siswa/siswa_dasboard');
    }
}
