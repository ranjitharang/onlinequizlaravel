<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Http\Resources\Json\Resource;
use App\User;

class PaginationController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
       return view('users', compact('users'));
     
    }

    public function getUsers()
{
    $users = User::all();

    return view('index', compact('users'));
}
}
