<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index() {
      echo "<br>Test Controller.";
   }
}
