@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservas / Nova Reserva</div>

                         <div class="panel-body">

                            {{  Form::open() }}
                                                      
                              <div class="form-group col-4 row">
                                <label for="data_reserva">Dia da reserva:</label>
                                <input type="date" value="<?php echo date('d-m-y'); ?>" class="form-control" name="data_reserva" min="<?php echo $today = date("Y-m-d"); ?>" max="<?php echo date("Y-m-d", strtotime('+7 days'));?>">

                              </div>
                        </div>

                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ ($errors->has('room_id') ? 'has-error' :'') }}">
                                    {{  Form::label('room_id', 'Sala', ['class' => 'control-label']) }}
                                    {{  Form::select('room_id', [], null, ['class' => 'form-control']) }}
                                    <span class="help-block">{!! $errors->first('room_id') !!}</span>
                                </div>
                            </div>
                    </div>
                     <div class="row">
                            <div class="col-md-12">
                                {{  Form::submit('salvar', ['class' => 'btn btn-primary']) }}
                                <a href="" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>

                                
                            
                        
                    {{ Form::close()  }}

                </div>
            </div>
        </div>
    </div>



@endsection