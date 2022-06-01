<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        $categorias = Categoria::All();
<<<<<<< HEAD
=======
        // dd($categorias);
>>>>>>> 60d728f4f0a521ea367007fcddd72a2ea8226f5d
        return view('categoria.index')->with('categorias', $categorias);
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function insert(Request $request)
    {
<<<<<<< HEAD
       //dd($request);
        $categoria = new Categoria();
        $categoria->descripcion = $request->descripcion;
        $categoria->estado = 0;
        $categoria->save();
        return redirect('/categorias');

    }
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        //dd($categoria);
        return view('categoria.edit')->with('categoria',$categoria);

    }
    public function update(Request $request ,$id)
    {
        $categoria = Categoria::find($id);
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect('/categorias');


    }
    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('/categorias');

    }
=======
        //dd($request);
        $categoria = new Categoria();
        $categoria->descripcion = $request->descripcion;
        $categoria->alias = $request->alias;
        $categoria->stock = $request->stock;
        $categoria->estado = 1;
        $categoria->save();
        return redirect('/categorias');
    }
    public function edit($id)
    {
       //echo $id;
        $categoria =Categoria::find($id);
       // dd($categoria);
       return view('categoria.edit')->with('categoria', $categoria);
    }
    public function update(Request $request ,$id)
    {
        //echo $id;
        $categoria =Categoria::find($id);
        $categoria->descripcion = $request->descripcion;
        $categoria->alias =$request->alias;
        $categoria->stock =$request->stock;
        $categoria->save();
        return redirect('/categorias');
    }



>>>>>>> 60d728f4f0a521ea367007fcddd72a2ea8226f5d
}
