<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {

       $news = Noticia::all();   

       return view('admin.index', ['news' => $news]);     

    }

    public function details(int $id)
    {
        
        return view('admin.details', ['new' => Noticia::findOrFail($id)]);// findOrFail -> Si no lo encuentra 404

    }

    public function create()
    {

        return view('admin.create');

    }

    public function creating(Request $request)
    {

        dd($request);

        //return view('admin.creating');

    }



}
