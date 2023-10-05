<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class HomeController extends Controller
{

    public function index()
    {

        return view('welcome');


    }

    public function news()
    {

        $news = Noticia::all();
              
       return view('news',['news' => $news]);
    
    }

    public function logIn()
    {

        return view('logIn');

    }

}



?>