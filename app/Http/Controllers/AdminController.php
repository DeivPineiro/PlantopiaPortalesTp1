<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class AdminController extends Controller
{


    public function index()
    {

//Para probar si trae datos
       $news = Noticia::all();   

       return view('admin/index', ['news' => $news]);     


    }



}
