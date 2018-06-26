<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function admin(){
        return view('users.admin.admin');
    }
    public function bishop(){
        return view('users.bishop.bishop');
    }
}
