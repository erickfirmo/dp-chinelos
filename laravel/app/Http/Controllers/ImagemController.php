<?php

namespace App\Http\Controllers;

use App\Imagem;
use Illuminate\Http\Request;

class ImagemController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $imagens = Imagem::orderBy('id', 'desc')->paginate(20);
        return view('admin.imagens.index',['imagens' => $imagens]);

    }

    public function create()
    {
        return view('admin.imagens.create');

    }


    public function store(Request $request)
    {
        // return $request->all();

        $this->validate($request, [
            'file' => 'required',
        ]);

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
    
                $imagem = new Imagem;
                $imagem->nome = $imageName;
                $imagem->url = $fileName;
                $imagem->save();
            }

            return redirect()->route('admin.imagens.index')
                ->with('success', "Upload realizado com sucesso !");
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
