<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    /**
     * @param Request $request
     */
    public function uploadAvatar(Request $request)
       {
          if ($request->hasFile('image')){

             User::uploadAvatar($request->image);
             return redirect()->back()->with('message','Image Uploaded');
          }
          return redirect()->back()->with('error','Image not Uploaded');
       }



    public function index(){

// DB::insert('insert into users (name, email,password) values (?,?,?)', ['franklin', 'uchefranklin010@gmail.com','franklin']);

//   DB::update('update users set name = ? where id = 1', ['John']);
// DB::delete('delete from users where id = 1');


//   $users=DB::select('select * from users');

            $user  = User::all();
            return $user;

        return view('home');
    }
}
