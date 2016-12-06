<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ErrorController extends Controller
{
    
    public function error_500()
    {
        return view('errors.500');
    }
}
