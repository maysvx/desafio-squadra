<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Endereco::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Endereco::create($request->all())) {
            return response()->json([
                "mensagem" => "Endereço cadastrada com sucesso."
            ], 200);
        }
        return response()->json([
            "mensagem" => "Não foi possível cadastrar o Endereço.",

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

        if (Endereco::findOrFail($id)) {
            return Endereco::findOrFail($id);
        }

        return response()->json([
            "mensagem" => "Não foi possível pesquisar o Endereço."
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

        if ($endereco = Endereco::findOrFail($id)) {
            $endereco->update($request->all());
            return $endereco;
        } else {
            return response()->json([
                "mensagem" => "Não foi possível alterar o Endereço."
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
        //
    }
}
