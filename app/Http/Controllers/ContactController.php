<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        return view('create');
    }

    public function insert(Request $request) {
      $name = $request->input('firstname','lastname','image');
      DB::insert('insert into user (firstname,lastname,image) values(?)',[$name]);
      
    //  DB::insert('insert into user(lastname) values(?)',[$name1]);
      //$image = $request->input('image');
     // DB::insert('insert into user(image) values(?)',[$image]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }

   public function index() {
      $users = DB::select('select * from user');
      return view('store',['users'=>$users]);
   }
}
