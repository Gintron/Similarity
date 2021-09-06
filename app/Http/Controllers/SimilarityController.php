<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class SimilarityController extends Controller
{
    public function index(){
        $numberOfAinBacon1 = $this->getNumberOfLL($this->prepareBaconApi());
        $numberOfAinBacon2 = $this->getNumberOfLL($this->prepareBaconApi());
        return view('similarity.index', ['numberOfAinBacon1' => $numberOfAinBacon1, 'numberOfAinBacon2' => $numberOfAinBacon2]);
    }

    public function prepareBaconApi(){
        $data = $this->getDataFromBaconApi();
        $data = $this->convertJsonToString($data);
        return $data;
    }
    public function getDataFromBaconApi(){
        return Http::get('https://baconipsum.com/api/?type=all-meat&sentences=2&start-with-lorem=0');
    }

    public function convertJsonToString($data){
        return implode(json_decode($data, true));
    }

    public function getNumberOfLL($data){
        return substr_count($data, "ll");
        
    }
}
