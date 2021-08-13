<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ControladorProdutos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = Produto::all();
        return view('produtos', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prods = new Produto();
        $prods->nome = $request->input('nomeProduto');
        $prods->estoque = $request->input('estoque');
        $prods->preco = $request->input('preco');
        $prods->categoria_id = $request->input('categoria_id');
        $prods->save();
        return redirect('/produto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prods = Produto::find($id);
        if(isset($prods)){
            return view('editarproduto', compact('prods'));
        }
        return redirect('/produto');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prods = Produto::find($id);
        if (isset($prods)) {
            $prods->nome = $request->input('nomeProduto');
            $prods->estoque = $request->input('estoque');
            $prods->preco = $request->input('preco');
            $prods->categoria_id = $request->input('categoria_id');
            $prods->save();
        }
        return redirect('/produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prods = Produto::find($id);
        if (isset($prods)) {
            $prods->delete();
        }
        return redirect('/produto');
    }
}
