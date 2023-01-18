<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    

    public function index(){
        
        return view('home');
    }

    public function select(){
        
        $cities = City::all();

    foreach($cities as $c){
        dump($c->Name. " : " . $c->Population);
    }

    
    }


    public function insert(){

     //   Post::query()->create(['title'=>'Артикл 85', 'content'=>'Lorem ipsum85']);

     $post = Post::find(3);
        $post->content = 'Lorem new post!3';
        $post->save();

        echo "<p>Updated</p>";
      
    }

 


    
    private function generatePassword()
    {
        $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');

      

        $password1 = substr($random, 0, 6);
        $password2 = substr($random, 0, 6);
        dump($password1.'-'.$password2);
        return $password1.'-'.$password2;
    }

    public function pass()
    {
        $password = $this->generatePassword();
        $code = Hash::make($password);
       dump($code);

}
}
