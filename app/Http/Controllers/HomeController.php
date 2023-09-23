<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {

        return view('welcome');


    }

    public function news()
    {

        return view('news');

    }

    public function logIn()
    {

        return view('logIn');

    }

}



?>