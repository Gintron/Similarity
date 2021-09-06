<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimilarityController extends Controller
{
    public function index(){
       
        return view('similarity.index');
    }
}
