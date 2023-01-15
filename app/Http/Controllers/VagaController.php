<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantidadeDeItensAExibir = 5;
        $listaVagas = Vaga::latest()->paginate(5);
        return view('vaga/index', compact('listaVagas'))->with('i', (request()->input('page', 1) - 1) * $quantidadeDeItensAExibir);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaga/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'required|min:3',
            'status' => 'required'
        ]);
        $vaga = Vaga::create($storeData);
        return redirect('/vaga')->with('sucess', 'Vaga salva com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vaga $vaga)
    {
        return view('vaga/show', compact('vaga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaga $vaga)
    {
        return view('vaga.edit', compact('vaga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaga $vaga)
    {
        $storeData = $request->validate(
            [
                'titulo' => 'required|max:255',
                'descricao' => 'required|min:3',
                'status' => 'required'
            ]
        );
        $vaga->update($storeData);
        return redirect('/vaga')->with('sucess', 'Vaga editada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaga $vaga)
    {
        $vaga->delete();
        return redirect('/vaga')->with('sucess', 'Vaga apagada com sucesso');
    }
}
