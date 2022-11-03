<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Http\Requests\StoreCategoriaRequest;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{



    public function index()
    {
        $categorias = Categoria::All();

        return view('categoria.index', compact('categorias'));
    }


    public function create()
    {
        return view('categoria.crud');
    }


    public function store(StoreCategoriaRequest $request)
    {
        $data = $request->validated();

        $categorias = Categoria::create($data);
        //testar o de cima  com s e tirar o de baixo
        //Categoria::create($data);

        return redirect()->route('categoria.index')->with('success','Categoria cadastrada com sucesso!');
    }

    public function show($id)
    {
        $categorias = Categoria::find($id);
        //testar com s

        return response()->json($categorias);
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.crud', compact('categoria'));
    }

    public function update(UpdateCategoriaRequest $request, $id)
    {
        $data = $request->validated();

        $categorias = Categoria::find($id);
        $categorias->update($data);
        //testar com s os dois

        return redirect()->route('categoria.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $categorias= Categoria::find($id);
        $categorias->delete();
        //testar com s os dois

        return redirect()->route('categoria.index')->with('success', 'Categoria excluída com sucesso!');
    }
}
