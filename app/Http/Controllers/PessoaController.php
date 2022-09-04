<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pessoa::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Pessoa::create($request->all())) {
            return response()->json([
                "mensagem" => "Pessoa cadastrada com sucesso."
            ], 200);
        }
        return response()->json([
            "mensagem" => "Não foi possível cadastrar a Pessoa.",

        ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (Pessoa::findOrFail($id)) {
            return Pessoa::findOrFail($id);
        }

        return response()->json([
            "mensagem" => "Não foi possível pesquisar a Pessoa."
        ], 404);
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

        if ($pessoa = Pessoa::findOrFail($id)) {
            $pessoa->update($request->all());
            return $pessoa;
        } else {
            return response()->json([
                "mensagem" => "Não foi possível alterar a Pessoa."
            ], 503);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Pessoa::destroy($id);
    }
}
