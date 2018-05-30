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
        // return $request->all();
        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('file')) { 

            foreach ($request->file as $file)
            {
                // Define um aleatório para o arquivo baseado no timestamps atual
                $imageName = uniqid(date('HisYmd'));
                // Recupera a extensão do arquivo
                $extension = $file->extension();
                // Difine o nome do arquivo
                $fileName = "{$imageName}.{$extension}";
                
                // Faz o upload
                $upload = $file->storeAs('images', $fileName);
    
                $image = new Image;
                $image->nome = $imageName;
                $image->url = $fileName;
                $image->save();
            }

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
