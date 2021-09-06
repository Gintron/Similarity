<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class SimilarityController extends Controller
{
    public function index(){
       dd($this->getDataFromBaconApi());
        return view('similarity.index');
    }

    public function getDataFromBaconApi(){
        return Http::get('https://baconipsum.com/api/?type=all-meat&sentences=2&start-with-lorem=0');
    }
}
