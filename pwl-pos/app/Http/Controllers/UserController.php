<?php

namespace App\Http\Controllers;

use App\Models\UserMode1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
  //      $data=
    //[
      //  'nama'=>'antok',
    //];
    //UserMode1::where('username','dika')->update($data);
    
    //hapus data 
        UserMode1::where('username', 'dika')->delete();
        
    $user=UserMode1::with('level')->get();
    return view('user', ['data'=>$user]);
    }
}