<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index(){
        
        return view('home');
    }

    public function select(){
        
        $datas = City::orderBy('Population')
        ->take(10)
        ->get();

        foreach($datas as $data){
           dump($data->Name . " -> " .$data->Population);
        }
       
    }

}
