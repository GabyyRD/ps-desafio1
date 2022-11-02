<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
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


    public function store(Request $request)
    {
        $rules = [
            'nome' => 'required|string|max:70',
            'descricao' => 'required|string|max:255',
            'preco' => 'required|integer|max:100',
            'quantidade' => 'required|integer',
            'categoria_id' => 'required',
        ];

        $data = $request->validate($rules); 

        if ($request->hasFile('imagem')){
            $datas['imagem'] = $request->file('imagem')->store('produtos','public');
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


    public function update(Request $request, $id)
    {
        $rules = [
            'nome' => 'required|string|max:70',
            'descricao' => 'required|string|max:225',
            'preco' => 'required|integer|max:100',
            'quantidade' => 'required|integer',
            'categoria_id' => 'required',
        ];

        $data = $request->validate($rules); 

        $produto = Produto::find($id);

        if ($request->hasFile('imagem')){
            Storage::delete('public/' . $produto->imagem);
            $datas['imagem'] = $request->file('imagem')->store('produtos','public');
        }
        
        $produto->update($rules);

        return redirect()->route('produto.index')->with('success', 'Produto cadastrado com sucesso!');
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
