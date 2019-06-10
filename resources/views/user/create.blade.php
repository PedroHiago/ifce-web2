@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservas / Nova Reserva</div>

                         <div class="panel-body">

                              <div class="form-group col-12 row">
                                <label for="data_reserva">Dia da reserva:</label>
                                <input type="date" 
                                value="<?php echo date('d-m-y'); ?>" class="form-control" name="data_reserva" 
                                min="<?php echo $today = date("Y-m-d"); ?>" 
                                max="<?php echo date("Y-m-d", 
                                strtotime('+7 days'));?>">
                                <br> <br>
                                <label for="inputState">Salas</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Selecione a sala para reserva...</option>
                                    </select>
                                </div>
                              
                        

                     <div class="row">
                        <div class="col-md-12">
                            {{  Form::submit('salvar', ['class' => 'btn btn-primary']) }}
                            <a href="/user/index" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection