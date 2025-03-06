<?php

namespace App\Http\Controllers;

use App\Models\Usermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        // $data= [
        //     'username' => 'Manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // // Usermodel::insert($data);

        // // $data = [
        // //     'nama' => 'Pelanggan Pertama',
        // // ];
        // Usermodel::create($data);

        // $user = Usermodel::all();
        // $user = Usermodel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = Usermodel::findOr(20, ['username', 'nama'], function(){
        //     abort(404);
        // });

        // return view('user', ['data' => $user]);

        // $user = Usermodel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // $user = Usermodel::where('level_id' , 2)->count();
        // dd($user);
        // return view('user', ['data' => $user]);

        // $user = Usermodel::where('level_id', 1)->count();
        // return view('user', ['data' => $user]);

        $user = Usermodel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user->save();
        
        return view('user', ['data' => $user]);
    }
}
