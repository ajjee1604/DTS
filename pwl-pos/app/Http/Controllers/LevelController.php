<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Attribute\ValueResolver;

class LevelController extends Controller
{
    public function index()
    {
        //tambah data
        //DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['Cus', 'Pelanggan', now()]); 
        //return 'Insert data baru berhasil';

        //update data
        //$row= DB::update('update m_level set level_nama = ? where level_kode = ?', ['customer', 'cus']);
        //return 'update data berhasil. Jumlah data yang diupdate: ' . $row. 'baris';

        //hapus data
        //$row = DB::delete('delete from m_level where level_kode = ?', ['cus']);
        //return 'Delete data berhasil, jumlah data yang dihapus: ' . $row. 'baris';

        //menampilkan data 
        $data = DB::select('select * from m_level');
        return view('level', ['data'=>$data]);
    }
    
}
