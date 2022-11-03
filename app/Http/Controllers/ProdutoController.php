<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProdutoRequest;
use App\Http\Requests\StoreProdutoRequest;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    
    public function index()
    {
        $produtos = Produto::All();

        return view('produto.index', compact('produtos'));
    }


    public function create()
    {
        $categorias = Categoria::all();
        

        return view('produto.crud', compact('categorias'));
    }


    public function store(StoreProdutoRequest $request)
    {
        $data = $request->validated(); 

        if ($request->hasFile('imagem')){
            $data['imagem'] = $request->file('imagem')->store('produtos','public');
        }
        Produto::create($data);

        return redirect()->route('produto.index')->with('success', 'Produto cadastrado com sucesso!');
    }


    public function show($id)
    {
        $produto = Produto::find($id);
        $produto->load('categoria'); //estava com s

        return response()->json($produto);

    }


    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();

        return view('produto.crud', compact('produto', 'categorias'));
    }


    public function update(UpdateProdutoRequest $request, $id)
    {
        $data = $request->validated(); 

        $produto = Produto::find($id);

        if ($request->hasFile('imagem')){
            Storage::delete('public/' . $produto->imagem);
            $data['imagem'] = $request->file('imagem')->store('produtos','public');
        }
        
        $produto->update($data); //estava rules

        return redirect()->route('produto.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        if ($produto->imagem){
            Storage::delete('public/' . $produto->imagem);
        }
        $produto->delete();

        return redirect()->route('produto.index')->with('success', 'Produto excluído com sucesso!');
    }
}
