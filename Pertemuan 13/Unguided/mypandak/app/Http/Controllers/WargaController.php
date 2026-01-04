<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Warga;

class WargaController extends Controller
{
    // =============================
    // RAW SQL QUERY
    // =============================
    public function insertRaw()
    {
        $sql = "
            INSERT INTO wargas
            (nik, nama_lengkap, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, status_keluarga)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ";

        $result = DB::insert($sql, [
            '3305123456780001',
            'Budi Santoso',
            'Purwokerto',
            '2001-05-12',
            'Jl. Merdeka No. 10',
            'Laki-laki',
            'Kepala Keluarga'
        ]);

        dump($result);
    }

    // =============================
    // QUERY BUILDER
    // =============================
    public function insertQB()
    {
        $result = DB::table('wargas')->insert([
            'nik' => '3305123456780002',
            'nama_lengkap' => 'Siti Aminah',
            'tempat_lahir' => 'Banyumas',
            'tanggal_lahir' => '2002-03-21',
            'alamat' => 'Jl. Melati No. 5',
            'jenis_kelamin' => 'Perempuan',
            'status_keluarga' => 'Istri',
        ]);

        dump($result);
    }

    // =============================
    // ELOQUENT ORM
    // =============================
    public function insertEloquent()
    {
        $warga = Warga::create([
            'nik' => '3305123456780003',
            'nama_lengkap' => 'Ahmad Fauzi',
            'tempat_lahir' => 'Cilacap',
            'tanggal_lahir' => '2000-11-10',
            'alamat' => 'Jl. Kenanga No. 7',
            'jenis_kelamin' => 'Laki-laki',
            'status_keluarga' => 'Anak'
        ]);

        dump($warga);
    }
}
