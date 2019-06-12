@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservas / Nova Reserva</div>

                         <div class="panel-body">
                            <form action="{{ route('reservas.store') }}" method="POST">
                            @csrf
                              <div class="form-group col-12 row">
                                <label for="data_reserva">Dia da reserva:</label>
                                <input type="date" 
                                value="<?php echo date('d-m-y'); ?>" class="form-control" name="data_reserva" 
                                min="<?php echo $today = date("Y-m-d"); ?>" 
                                max="<?php echo date("Y-m-d", 
                                strtotime('+7 days'));?>">
                                <br> <br>
                                <label for="inputState">Salas</label>
                                    <select id="inputState" class="form-control" name="sala">
                                        <option selected>Selecione a sala para reserva...</option>
                                        @foreach ($salas as $sala)
                                            <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                     <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="{{ route('user')}}" class="btn btn-danger">Voltar</a>
                        </div>
                    </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection