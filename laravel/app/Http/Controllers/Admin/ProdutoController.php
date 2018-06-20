<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use App\Status;
use App\Imagem;
use App\ImagemDoProduto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $produtos = Produto::orderBy('id', 'desc')->paginate(50);

        return view('admin.produtos.index',['produtos' => $produtos]);

    }

    public function create()
    {
        $categorias = Categoria::pluck('nome', 'id');
        $status = Status::pluck('nome', 'id');

        return view('admin.produtos.create')
            ->withCategorias($categorias)
            ->withStatus($status);

    }


    public function store(Request $request) 
    {
        $this->validate($request, [
            'nome' => 'required|unique:produtos',
            'unidades' => 'required',
            'preco' => 'required',
            'file1' => 'required',
        ]);

        $fileName1 = 'noimage.jpeg';
        $fileName2 = 'noimage.jpeg';
        $fileName3 = 'noimage.jpeg';

        

    if ($request->hasFile('file1')) {
        $imageName1 = uniqid(date('HisYmd'));
        $extension1 = $request->file('file1')->extension();
        $fileName1 = "{$imageName1}.{$extension1}";
        
        $upload1 = $request->file('file1')->storeAs('images', $fileName1);
    }

    if ($request->hasFile('file2')) {
        $imageName2 = uniqid(date('HisYmd'));
        $extension2 = $request->file('file2')->extension();
        $fileName2 = "{$imageName2}.{$extension2}";
        
        $upload2 = $request->file('file2')->storeAs('images', $fileName2);
    }
    if ($request->hasFile('file3')) {
        $imageName3 = uniqid(date('HisYmd'));
        $extension3 = $request->file('file3')->extension();
        $fileName3 = "{$imageName3}.{$extension3}";
        
        $upload3 = $request->file('file3')->storeAs('images', $fileName3);
    }

            
            
            $produto = new Produto;

            $produto->nome = $request->nome;
            $produto->descricao = $request->descricao;
            $produto->imagem_principal = $fileName1;
            $produto->imagem_2 = $fileName2;
            $produto->imagem_3 = $fileName3;
            $produto->unidades = $request->unidades;
            $produto->preco = number_format($request->preco, 2, '.', '');
            $produto->categoria_id = $request->categoria_id;
            $produto->status_id = $request->status_id;
            $produto->save();
        
            

            return redirect()->route('admin.produtos.edit', compact('produto'))
            ->with('success', "Produto criado com sucesso !");
        

    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('admin.produtos.show', compact('produto'));

    }

    public function edit(Produto $produto)
    {
        
        $categorias = Categoria::pluck('nome', 'id');
        $status = Status::pluck('nome', 'id');
        
        $imagens_do_produto = ImagemDoProduto::where('produto_id', '=' ,$produto->id)->pluck('imagem_id');
        $imagens = Imagem::all();

        return view('admin.produtos.edit')
            ->withProduto($produto)
            ->withCategorias($categorias)
            ->withStatus($status)
            ->withImagens($imagens)
            ->withImagensDoProduto($imagens_do_produto);

        
    }

    public function update(Request $request, $id)
    {

        $produto = Produto::findOrFail($id);

            $fileName1 = $produto->imagem_principal;
            $fileName2 = $produto->imagem_2;
            $fileName3 = $produto->imagem_3;
            

        if ($request->hasFile('file1')) {
            $imageName1 = uniqid(date('HisYmd'));
            $extension1 = $request->file('file1')->extension();
            $fileName1 = "{$imageName1}.{$extension1}";
            $upload1 = $request->file('file1')->storeAs('images', $fileName1);
        }

        if ($request->hasFile('file2')) {
            $imageName2 = uniqid(date('HisYmd'));
            $extension2 = $request->file('file2')->extension();
            $fileName2 = "{$imageName2}.{$extension2}";
            $upload2 = $request->file('file2')->storeAs('images', $fileName2);
        }

        if ($request->hasFile('file3')) {
            $imageName3 = uniqid(date('HisYmd'));
            $extension3 = $request->file('file3')->extension();
            $fileName3 = "{$imageName3}.{$extension3}";
            $upload3 = $request->file('file3')->storeAs('images', $fileName3);
        }

        

        
        $produto = Produto::findOrFail($id)
        ->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'unidades' => $request->unidades,
            'preco' => number_format($request->preco, 2, '.', ''),
            'status_id' => $request->status_id,
            'categoria_id' => $request->categoria_id,
            'imagem_principal' => $fileName1,
            'imagem_2' => $fileName2,
            'imagem_3' => $fileName3,
        ]);


        

        return redirect()->route('admin.produtos.edit', compact('produto'))
            ->with('success', "Produto atualizado com sucesso !");

    }


    public function destroy($id)
    {   
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('admin.produtos.index')
            ->with('success', "Produto removido com sucesso !");

    }

}
