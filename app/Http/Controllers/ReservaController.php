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
            $reservas = Reserva::where('user_id',auth()->user()->id)->get();
            return view('user.index', compact('reservas'));
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
            $salas = Sala::all();
            return view('user.create', compact('salas'));
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
                'sala' => 'required',
                'data_reserva'=>'required'
            ]);
            $reserva = new Reserva([
                'sala_id' => $request->get('sala'),
                'data_reserva'=>$request->get('data_reserva'),
                'user_id'=>(auth()->user()->id),
            ]);
            if((Reserva::where('sala_id', $reserva->sala_id, 'and')->where('data_reserva', $reserva->data_reserva))->count() == 0){
                $reserva->save();
                return redirect('/user')->with('message', 'Reserva realizada com sucesso!');
            }else{
                return redirect('/user')->with('message', 'Sala já reservada para esta data!');
            }
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
        $sala = $request-> all();

 Sala::find($id)-> update($product);
 return redirect('/admin')->with('message', 'Success');
    }
     /*   try {
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
    }*/

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