<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request\StoreCategoriaRequest;

use App\Models\Categoria;
use App\Models\Produto;

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


    public function store(Request $request)
    {
        $rules = [
            'categoria' => 'required|string|max:255'
        ];

        $data = $request->validate($rules);

        $categoria = Categoria::create($data);
        Categoria::create($data);

        return redirect()->route('categoria.index')->with('success','Categoria cadastrada com sucesso!');
    }

    //public function show($id)
    //{
     //   $categoria = Categoria::find($id);

       // return response()->json($categoria);
    //}

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.crud', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'categoria' => 'required|string|max:225',
        ];

        $data = $request->validate($rules);

        $categoria = Categoria::find($id);
        $categoria->update($data);

        return redirect()->route('categoria.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categoria.index')->with('success', 'Categoria excluída com sucesso!');
    }
}
