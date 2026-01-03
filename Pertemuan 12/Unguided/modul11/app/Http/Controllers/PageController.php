<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function mahasiswa() {
        $data = ["Andi", "Budi", "Citra", "Dina"];
        return view('mahasiswa_controller', ['mahasiswa' => $data]);
    }
}
