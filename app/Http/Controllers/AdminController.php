<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {

        return view('admin/index');

    }

}


?>