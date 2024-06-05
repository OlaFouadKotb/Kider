<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class KiderController extends Controller
{

    public function home(){
        $title="Preschool Website";
        return view('index',compact('title'));



        
    }
}