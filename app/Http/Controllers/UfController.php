<?php

namespace App\Http\Controllers;

use App\Models\Uf;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class UfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Uf::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Uf::create($request->all())) {
            return response()->json([
                "mensagem" => "UF cadastrada com sucesso."
            ], 200);
        }
        return response()->json([
            "mensagem" => "Não foi possível cadastrar a UF.",

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
        if (Uf::findOrFail($id)) {
            return Uf::findOrFail($id);
        }

        return response()->json([
            "mensagem" => "Não foi possível pesquisar a UF."
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
        if ($uf = Uf::findOrFail($id)) {
            $uf->update($request->all());
            return $uf;
        } else {
            return response()->json([
                "mensagem" => "Não foi possível alterar a UF."
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
        return Uf::destroy($id);
    }
}
