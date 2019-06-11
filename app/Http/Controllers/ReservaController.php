<?php

namespace App\Http\Controllers;
use App\Sala;
use App\Reserva;
use Validator;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $salas = Sala::all();
            return view('salas.index', compact('salas'));
        } catch (\Throwable $th) {
            throw $th;
        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('salas.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nome' => 'required',
            ]);
            $sala = new Sala([
                'nome' => $request->get('nome'),
            ]);
            $sala->save();
            return redirect('/salas')->with('success', 'Sala Cadastrada com Sucesso!');
        } catch (\Throwable $th) {
            throw $th;
        }
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
        try {
            $salas = Sala::find($id);
            return view('salas.edit', compact('salas'));
        } catch (\Throwable $th) {
            throw $th;
        }
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
        try {
            $request->validate([
                'nome' => 'required',
            ]);
            $sala = Sala::find($id);
            $sala->nome = $request->get('nome');
            $sala->save();
            return redirect('/salas')->with('success', 'Sala Atualizada com Sucesso!');
        } catch (\Throwable $th) {
            throw $th;
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
        try {
            if(Sala::where('sala_id', $id)->count() > 0){
                return redirect('/salas')->with('mensagem', 'Sala que deseja excluir participa de uma reserva!');
            }else{
                $data = Sala::findOrFail($id);
                $data->delete();

                return redirect('/salas')->with('mensagem1', 'Sala Excluída com Sucesso!');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
}
