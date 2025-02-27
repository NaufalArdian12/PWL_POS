<?php

namespace App\Http\Controllers;

use App\Models\Usermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index () {

        // $data= [
        //     'username' => 'Customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 3
        // ];
        // Usermodel::insert($data);

        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        Usermodel::where('username', 'Customer-1') ->update($data);

        $user = Usermodel::all();
        return view('user', ['data' => $user]);
    }
}
