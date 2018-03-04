<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    //
    function index(){
        return view('admins.filemans.index');
    }
}
