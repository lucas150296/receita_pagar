<?php

namespace App\Http\Controllers;

use App\ReceitaPagar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReceitarPagarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $api = Http::get('https://63d04fc0e52f587829afcc9f.mockapi.io/receitas');

        $apiArrey = $api->json();

        $receitaPagar = ReceitaPagar::all();

        return view('receitaPagar.index' ,  ['titulo' => 'lista de recebo', 'apiArrey' =>$apiArrey, 'receitaPagar' => $receitaPagar]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receitaPagar.create' , ['titulo' => 'Nova receitar' ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'description' => 'required|min:3|max:2000',
            'clientName' => 'required|min:3|max:50',
            'value' => 'required|integer',
            'dueDate' => 'required',

            'status'=> 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'description.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'description.max' => 'O campo nome deve ter no máximo 2000 caracteres',
            'clientName.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'clientName.max' => 'O campo nome deve ter no máximo 50 caracteres',
            'value.integer' => 'O campo peso deve ser um número inteiro',
        ];

        $request->validate($regras, $feedback);

        ReceitaPagar::create($request->all());

        return redirect()->route('principal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReceitaPagar  $receitaPagar
     * @return \Illuminate\Http\Response
     */
    public function show(ReceitaPagar $receitaPagar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReceitaPagar  $receitaPagar
     * @return \Illuminate\Http\Response
     */
    public function edit(ReceitaPagar $receitaPagar  )
    {
        return view('receitaPagar.edit', ['titulo' => 'editar', 'receitaPagar' => $receitaPagar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReceitaPagar  $receitaPagar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReceitaPagar $receitaPagar)
    {
        $regras = [
            'description' => 'required|min:3|max:2000',
            'clientName' => 'required|min:3|max:50',
            'value' => 'required|integer',
            'dueDate' => 'required',

            'status'=> 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'description.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'description.max' => 'O campo nome deve ter no máximo 2000 caracteres',
            'clientName.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'clientName.max' => 'O campo nome deve ter no máximo 50 caracteres',
            'value.integer' => 'O campo peso deve ser um número inteiro',
        ];

        $request->validate($regras, $feedback);

        $ReceitaPagar::update($request->all());

        return redirect()->route('principal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReceitaPagar  $receitaPagar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReceitaPagar $receitaPagar)
    {
        $receitaPagar->delete();
        return redirect()->route('principal');
    }
}
