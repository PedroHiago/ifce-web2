@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="container">
        <div clas="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservas</div>

                    <div class="panel-body">

                        <a href="" class="btn btn-primary">Nova Reserva</a>

                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="1">Inicio</th>
                                <th width="1">Término</th>
                                <th width="200">Sala</th>
                                <th width="200">Responsável</th>
                                <th>Participantes</th>
                                <th width="120">Ações</th>

                            </tr>
                            </thead>
                             
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection