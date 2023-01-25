<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PricipalController extends Controller
{
    public function index(){

        return view('pricipal.index' ,[ 'titulo' => 'principal']);
    }
}
