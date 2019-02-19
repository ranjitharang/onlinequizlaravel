<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class BiodataController extends Controller
{
    
    public function index()
    {
    	$biodatas = Biodata::latests()->paginate(5);
    	return view('biodata.index', compact(biodatas))->with('i',request()->input('page',1) -1)*5);
    }
}
