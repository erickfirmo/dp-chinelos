<?php

namespace App\Http\Controllers\Admin;


use App\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $categorias = Categoria::orderBy('id', 'desc')->paginate(10);
        return view('admin.categorias.index',['categorias' => $categorias]);

    }

    public function create()
    {
        return view('admin.categorias.create');

    }


    public function store(Request $request) 
    {
        $this->validate($request, [
            'nome' => 'required|unique:categorias'
        ]);

        $categoria = new Categoria;
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect()->route('admin.categorias.index')
            ->with('success', "Categoria criada com sucesso !");

    }

    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.show', compact('categoria'));

    }

    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit')
            ->withCategoria($categoria);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
        ]);
        
        $categoria = Categoria::findOrFail($id)->update($request->all());

        return redirect()->route('admin.categorias.index')
            ->with('success', "Categoria atualizada com sucesso !");

    }


    public function destroy($id)
    {   
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('admin.categorias.index')
            ->with('success', "Categoria removida com sucesso !");

    }
}
