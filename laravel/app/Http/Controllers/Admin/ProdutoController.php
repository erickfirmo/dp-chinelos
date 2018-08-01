<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;
use App\Status;
use App\Imagem;
use App\ImagemDoProduto;
use App\Tamanho;
use App\TamanhoDoProduto;

use App\Http\Controllers\Admin\TamanhoDoProdutoController;


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

        return view('admin.produtos.index',[
            
            'produtos' => $produtos
            
            ]);
    }


    public function create()
    {
        $categorias = Categoria::pluck('nome', 'id');
        $status = Status::pluck('nome', 'id');
        $tamanhos = Tamanho::pluck('tamanho', 'id');

        return view('admin.produtos.create')
            ->withCategorias($categorias)
            ->withStatus($status)
            ->withTamanhos($tamanhos);
    }


    public function store(Request $request) 
    {
        $this->validate($request, [
            'nome' => 'required|unique:produtos|max:30',
            'unidades' => 'required',
            'preco' => 'required',
            'file1' => 'required',
        ]);
        
        $produto = new Produto;

        $fileName1 = '';
        $fileName2 = '';
        $fileName3 = '';

        if ($request->hasFile('file1'))
        {
            $imageName1 = uniqid(date('HisYmd'));
            $extension1 = $request->file('file1')->extension();
            $fileName1 = "{$imageName1}.{$extension1}";
            $upload1 = $request->file('file1')->storeAs('images', $fileName1);
        }

        if ($request->hasFile('file2'))
        {
            $imageName2 = uniqid(date('HisYmd'));
            $extension2 = $request->file('file2')->extension();
            $fileName2 = "{$imageName2}.{$extension2}"; 
            $upload2 = $request->file('file2')->storeAs('images', $fileName2);
        }

        if ($request->hasFile('file3'))
        {
            $imageName3 = uniqid(date('HisYmd'));
            $extension3 = $request->file('file3')->extension();
            $fileName3 = "{$imageName3}.{$extension3}";   
            $upload3 = $request->file('file3')->storeAs('images', $fileName3);
        }

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->unidades = $request->unidades;
        $produto->preco = number_format($request->preco, 2, '.', '');
        $produto->unidades_lote = $request->unidades_lote;
        $produto->preco_lote = number_format($request->preco_lote, 2, '.', '');
        $produto->imagem_principal = $fileName1;
        $produto->imagem_2 = $fileName2;
        $produto->imagem_3 = $fileName3;
        $produto->categoria_id = $request->categoria_id;
        $produto->status_id = $request->status_id;

        $produto->save();

        foreach($request->tamanho_id as $tamanho_id)
        {
            $tamanho_do_produto = new TamanhoDoProduto;
            $tamanho_do_produto->tamanho_id = $tamanho_id;
            $tamanho_do_produto->produto_id = $produto->id;
            $tamanho_do_produto->save();
        }

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
        $tamanhos = Tamanho::pluck('tamanho', 'id');
        $tamanhos_do_produto = TamanhoDoProduto::where('produto_id',$produto->id)->pluck('tamanho_id');
        $imagens = Imagem::all();

        return view('admin.produtos.edit')
            ->withProduto($produto)
            ->withCategorias($categorias)
            ->withStatus($status)
            ->withImagens($imagens)
            ->withTamanhos($tamanhos)
            ->withTamanhosDoProduto($tamanhos_do_produto);
    }

    public function editTamanhos(){

        

    }


    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $this->validate($request, [
            'unidades' => 'required',
            'preco' => 'required',
            'tamanho_id' => 'required',
            

        ]);

        $fileName1 = $produto->imagem_principal;
        $fileName2 = $produto->imagem_2;
        $fileName3 = $produto->imagem_3;
            

        if ($request->hasFile('file1'))
        {
            $imageName1 = uniqid(date('HisYmd'));
            $extension1 = $request->file('file1')->extension();
            $fileName1 = "{$imageName1}.{$extension1}";
            $upload1 = $request->file('file1')->storeAs('images', $fileName1);
        }

        if ($request->hasFile('file2')) 
        {
            $imageName2 = uniqid(date('HisYmd'));
            $extension2 = $request->file('file2')->extension();
            $fileName2 = "{$imageName2}.{$extension2}";
            $upload2 = $request->file('file2')->storeAs('images', $fileName2);
        }

        if ($request->hasFile('file3'))
        {
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
            'unidades_lote' => $request->unidades,
            'preco_lote' => number_format($request->preco, 2, '.', ''),
            'imagem_principal' => $fileName1,
            'imagem_2' => $fileName2,
            'imagem_3' => $fileName3,
            'status_id' => $request->status_id,
            'categoria_id' => $request->categoria_id,
        ]);
        

        $tamanhos_id = $request->tamanho_id;
        $tamanhos_do_produto = TamanhoDoProduto::where('produto_id', $id)->pluck('tamanho_id', 'id');

        $novo_tamanho = false;
        $destroy_tamanho = true;


        foreach($tamanhos_do_produto as $key => $tamanho_do_produto)
        {

            foreach($tamanhos_id as $tamanho_id)
            {
                
                $destroy_tamanho = true;

                if($tamanho_do_produto == $tamanho_id)
                {
                    $destroy_tamanho = false;
                    break;
                    
                }


            }

            if($destroy_tamanho == true)
            {
                
                
                $current_product = TamanhoDoProduto::findOrFail($key);
                $current_product->delete();
            }
            
            

        }




        foreach($tamanhos_id as $key => $tamanho_id)
        {

            foreach($tamanhos_do_produto as $tamanho_do_produto)
            {
                
                $novo_tamanho = false;

                if($tamanho_id == $tamanho_do_produto)
                {
                    $novo_tamanho = true;
                    break;
                    
                }


            }

            if($novo_tamanho != true)
            {
                
                $novo_tamanho_do_produto = new TamanhoDoProduto;
                $novo_tamanho_do_produto->tamanho_id = $tamanho_id;
                $novo_tamanho_do_produto->produto_id = $id;
                $novo_tamanho_do_produto->save();
            }
            

        }


        
    

        return redirect()->route('admin.produtos.edit', compact('produto'))
            ->with('success', "Produto atualizado com sucesso !");

    }


    public function destroy($id)
    {   


        $tamanhos_do_produto = TamanhoDoProduto::where('produto_id',$id)->pluck('id');
        

        foreach($tamanhos_do_produto as $tamanho_do_produto)
        {

                
            $current_tamanho = TamanhoDoProduto::findOrFail($tamanho_do_produto);
            $current_tamanho->delete();
            
        }


        $produto = Produto::findOrFail($id);
        $produto->delete();
        
        return redirect()->route('admin.produtos.index')
            ->with('success', "Produto removido com sucesso !");
    }
}
