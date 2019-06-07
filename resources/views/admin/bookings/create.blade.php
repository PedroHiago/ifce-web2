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

                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group"> 
                                    {{  Form::label('date_start', 'Início', ['class' => 'control-label']) }} 
                                     <div class='input-group date' id='date_start'>
                                        {{  Form::text('date_start', null, ['class' => 'form-control']) }}
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
        
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-group {{ ($errors->has('date_end') ? 'has-error' :'') }}"> 
                                    {{  Form::label('date_end', 'Término', ['class' => 'control-label']) }} 
                                    <div class='input-group date' id='date_end'>
                                        {{  Form::text('date_end', null, ['class' => 'form-control']) }}
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        <span>
                                    </div>
                                    </div>
                                    <span class="help-block">{!! $errors->first('date_end') !!}</span>
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
                                <div class="form-group {{ ($errors->has('participants') ? 'has-error' :'') }}">
                                    {{  Form::label('participants', 'participantes', ['class' => 'control-label']) }}
                                    {{  Form::select('participants[]', [], null, ['class' => 'form-control', 'multiple', 'size' => 10]) }}
                                    <span class="help-block">{!! $errors->first('participants') !!}</span>
                                </div>
                            <div>
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