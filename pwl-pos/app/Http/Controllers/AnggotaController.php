<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    
    public function cekObject(){
        $anggota = new Anggota;

        dump($anggota);
    }
        //public function insert(){
            //$anggota = new Anggota;
            //$anggota->nip='1234231';
            //$anggota->nama='Ajeng';
            //$anggota->tanggal_lahir='2004-06-01';
            //$anggota->nilai='3.2';
            //$anggota->save();

            //echo "data berhasil disimpan";
        //}
        //public function update(){
            //$anggota = Anggota::find(1);
            //$anggota->nama='Ajeng';
            //$anggota->nilai='3.4';
            //$anggota->save();

            //echo "data berhasil diupdate";
        //}
        //public function delete(){
            //$anggota = Anggota::find(2);
            //$anggota->delete();
            //echo "data berhasil dihapus";
        //}
        //public function all(){
            //$result=Anggota::all();
            //return view('tampilkan_anggota', ['anggotas'=>$result]);
            //dump($result);
            public function find(){
                $result=Anggota::find(1);
                return view('tampilkan_anggota',['anggotas'=>[$result]]);
                //dump($result);

            }
        }
