<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bairro::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Bairro::create($request->all())) {
            return response()->json([
                "mensagem" => "Bairro cadastrada com sucesso."
            ], 200);
        }
        return response()->json([
            "mensagem" => "Não foi possível cadastrar o Bairro.",

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
        if (Bairro::findOrFail($id)) {
            return Bairro::findOrFail($id);
        }

        return response()->json([
            "mensagem" => "Não foi possível pesquisar o Bairro."
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

        if ($bairro = Bairro::findOrFail($id)) {
            $bairro->update($request->all());
            return $bairro;
        } else {
            return response()->json([
                "mensagem" => "Não foi possível alterar o Bairro."
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
