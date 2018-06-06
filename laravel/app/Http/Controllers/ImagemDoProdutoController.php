<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagemDoProdutoController extends Controller
{
    public function store(){
        if ($request->hasFile('file')) { 

            $i = 0;

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

                $imageSource[$i] = $fileName;

                $i++;
            }

            print_r($imageSource);

            // !! json response here !! //
            
        }
    }
}
