<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Municipio::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Municipio::create($request->all())) {
            return response()->json([
                "mensagem" => "Municipio cadastrado com sucesso."
            ], 200);
        }
        return response()->json([
            "mensagem" => "Não foi possível cadastrar o Municipio.",

        ], 500);

        return Municipio::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Municipio::findOrFail($id)) {
            return Municipio::findOrFail($id);
        }

        return response()->json([
            "mensagem" => "Não foi possível pesquisar o Municipio."
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

        if ($municipio = Municipio::findOrFail($id)) {
            $municipio->update($request->all());
            return $municipio;
        } else {
            return response()->json([
                "mensagem" => "Não foi possível alterar, pois já existe um registro de Município com o mesmo nome para a UF informada."
            ], 400);
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
        //return Municipio::destroy($id);
    }
}
