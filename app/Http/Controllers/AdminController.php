<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Topico;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {

        $news = Noticia::with('topico')->get();// Para ahorrar queryes al momento de buscar datos relacionados de la tabla news

        return view('admin.index', ['news' => $news]);
    }

    public function details(int $id)
    {

        return view('admin.details', ['new' => Noticia::findOrFail($id)]); // findOrFail -> Si no lo encuentra 404

    }

    public function create()
    {

        return view('admin.create',['topico'=>Topico::all()]);
        
    }

    public function creating(Request $request)
    {

        $data = $request->except(['_token']);

        //Si hay imagen que cargar 
        //php artisan storage:link
        
        if($request->hasFile('img'))
        {
            // la guarda... obvio
           $data['img'] = $request->file('img')->store('imgs');

        }



        $request->validate([

            'titulo' => 'required|min:2',
            'subTitulo' => 'required|min:1',
            'parrafo' => 'required|min:1',
            'fecha_creacion' => 'required',
            'editor' => 'required',
            'publicado' => 'required',
            'topico_id'=> 'required|exists:topicos'

        ], [
            'titulo.required' => 'El titulo es necesario.',
            'titulo.min' => 'El titulo tiene un minimo de :min caracteres',
            'subTitulo.required' => 'El sub titulo es necesario.',
            'subTitulo.min' => 'El sub titulo tiene un minimo de :min caracteres',
            'parrafo.required' => 'El parrafo es necesario.',
            'parrafo.min' => 'El parrafo tiene un minimo de :min caracteres',
            'fecha_creacion.required' => 'La fecha de creación es necesario.',
            'editor.required' => 'El editor es necesario.',
            'publicado.required' => 'Es necesario saber si esta publicado al momento de crearlo.',
            'topico_id.required'=> 'Es necesario saber el topico',
            'topico_id.exists'=> 'Debe de existir el topico'
        ]);

        Noticia::create($data);
        return redirect('/admin/noticias')
            ->with('status.message', 'La noticia <b>' . e($data['titulo']) . '</b> se cargó con éxito.');
    }

    public function edit(int $id)
    {

       

        return view('admin.edit', ['new' => Noticia::findOrFail($id)],['topico'=>Topico::all()]);
    }

    public function editing(int $id, Request $request)
    {
        $new = Noticia::findOrFail($id);

        $request->validate([

            'titulo' => 'required|min:2',
            'subTitulo' => 'required|min:1',
            'parrafo' => 'required|min:1',
            'fecha_creacion' => 'required',
            'editor' => 'required',
            'publicado' => 'required',
            'topico_id'=> 'required|exists:topicos'

        ], [
            'titulo.required' => 'El titulo es necesario.',
            'titulo.min' => 'El titulo tiene un minimo de :min caracteres',
            'subTitulo.required' => 'El sub titulo es necesario.',
            'subTitulo.min' => 'El sub titulo tiene un minimo de :min caracteres',
            'parrafo.required' => 'El parrafo es necesario.',
            'parrafo.min' => 'El parrafo tiene un minimo de :min caracteres',
            'fecha_creacion.required' => 'La fecha de creación es necesario.',
            'editor.required' => 'El editor es necesario.',
            'publicado.required' => 'Es necesario saber si esta publicado al momento de crearlo.',
            'topico_id.required'=> 'Es necesario saber el topico',
            'topico_id.exists'=> 'Debe de existir el topico'
        ]);

        $data = $request->except('_token');

        if($request->hasFile('img'))
        {
            // la guarda... obvio
           $data['img'] = $request->file('img')->store('imgs');

        }

        $new->update($data);


        return redirect('/admin/noticias')
        ->with('status.message', 'La noticia con id: <b>' . e($request->input('titulo')) . '</b> fue editada con éxito');
    }

    public function delete(int $id)
    {
        return view('admin.delete', [
            'new' => Noticia::findOrFail($id),
        ]);
    }


    public function deleting(int $id) 
    {

      $new = Noticia::findOrFail($id);
      $new->delete();
      return redirect('/admin/noticias')
          ->with('status.message', 'La noticia <b>' . e($new->titulo) .'</b> fue eliminada');

    }



}
