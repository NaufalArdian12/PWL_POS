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

        // $user = Usermodel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();

        // return view('user', ['data' => $user]);

        //     $user = UserModel::create([
        //     'username' => 'manager55',
        //     'nama' => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,

        // ]);

        // $user->username = 'manager56';

        // $user->isDirty(); // true
        // $user->isDirty('username'); // true
        // $user->isDirty('nama'); // false
        // $user->isDirty(['nama', 'username']); // true

        // $user->isClean(); // false
        // $user->isClean('username'); // false
        // $user->isClean('nama'); // true
        // $user->isClean(['nama', 'username']); // false

        // $user->save();

        // $user->isDirty(); // false
        // $user->isClean(); // true
        // dd($user->isDirty());

            $user = UserModel::create([
            'username' => 'manager13',
            'nama' => 'Manager13',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager14';

        $user->save();

        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['username', 'level_id']);
        $user->wasChanged('nama');
        $user->wasChanged(['nama', 'username']);
        dd($user->wasChanged(['nama', 'username'])); // true
    }
}
