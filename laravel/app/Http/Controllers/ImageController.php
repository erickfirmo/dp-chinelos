<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $images = Image::all();
        return view('admin.imagens.index',['images' => $images]);

    }

    public function create()
    {
        return view('admin.imagens.create');

    }


    public function store(Request $request) 
    {
        
        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('image') && $request->file('image')->isValid()) { 
            // Define um aleatório para o arquivo baseado no timestamps atual
            $imageName = uniqid(date('HisYmd'));
            // Recupera a extensão do arquivo
            $extension = $request->image->extension();
            // Difine o nome do arquivo
            $nameFile = "{$imageName}.{$extension}";
            // Faz o upload
            $update = $request->image->storeAs('images', $nameFile);
            
            $image = new Image;
            $image->nome = $imageName;
            $image->url = $nameFile;
            $image->save();

            return redirect()->route('admin.imagens.index', compact('image'))
                ->with('success', "Imagem salva com sucesso !");
        }
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }


    public function destroy()
    {   

    }


}
