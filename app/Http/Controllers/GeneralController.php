<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function developRedirect()
    {
        return view('develop');
    }
    public function index()
    {
        return view('index');
    }
}
