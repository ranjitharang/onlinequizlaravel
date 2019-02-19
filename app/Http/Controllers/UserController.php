<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct() {
    	// $this->middleware('auth');
      $this->middleware('Second');
   }

   public function showPath(Request $request) {
      $uri = $request->path();
      echo '<br>URI: '.$uri;
      
      $url = $request->url();
      echo '<br>';
      
      echo 'URL: '.$url;
      $method = $request->method();
      echo '<br>';
      
      echo 'Method: '.$method;
   }

   public function index() {
      $users = DB::table('users')->paginate(15);
      return view('user.index', ['users' => $users]);
   }
}
