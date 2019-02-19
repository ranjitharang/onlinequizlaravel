<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CookieController extends Controller
{
    function index() {
      return view('contact_form');
    }
 
    function store(Request $request) {
 
        try {
            // my data storage location is project_root/storage/app/data.json file.
            $contactInfo = [];
        
            $inputData = $request->only(['name', 'email', 'message','subject']);
           
            $inputData['datetime_submitted'] = date('Y-m-d H:i:s');
 
            array_push($contactInfo,$inputData);
    
            Storage::disk('local')->put('data.json', json_encode($contactInfo));
 
            return $inputData;
 
        } catch(Exception $e) {
 
            return ['error' => true, 'message' => $e->getMessage()];
 
        }
    }
}
