@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">criar, atualizar e excluir Salas</div>
                    <div class="panel-body">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        <div class="form-group col-12 row">
                                    <table class=" table table-striped table-hover">

                                    <thead>
                                    <tr>
                                        <th width="200">Adicionar Salas</th>
                                    
                                    </tr>
                                    </thead>
                                    
                                </table>
                                <form class="form-inline" method="POST" action="{{ route('admin.store') }}"> @csrf
                                    <div class="form-group mx-sm-3">
                                        <label for="nome" class="sr-only">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da sala">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Adicionar</button>
                                </form>
                                
                                
                                <table class="mt-5 table table-striped table-hover">

                                    <thead>
                                    <tr>
                                        <th width="200">Lista de Salas Adicionadas</th>
                                    
                                    </tr>
                                    </thead>
                                    
                                    @if ($salas->isEmpty())
                                    <tr>
                                        <th>
                                            <p>Não há Salas</p>
                                        </th>
                                        </tr>
                                    @else
                                    @foreach ($salas as $item)
                                        <tr>
                                                <th width="200">
                                                    <form class="form-inline" action="{{ route('admin.update', $item->id) }}" method="POST">
                                                    @csrf
                                                        @method('PATCH')
                                                    <div class="form-group">
                                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da Sala" value="{{ $item->nome }}">
                                                    </div>
                                                    <button type="submit" class="btn btn-info">Atualizar</button>
                                                    
                                                </form>
                                                </th>
                                                <th width="200"><form action="{{ route('admin.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Excluir</button>
                                                    </form>
                                                </th>      
                                                </tr>                              
                                                @endforeach                                    
                                    @endif
            
                                </table>


                                <div class="d-flex">
                            <div class="p-2">
                                <label class="" for="data_reserva">Lista de Reservas</label>
                            </div>
                        </div>                                 
                        <div class="form-group col-12 row">

                                <table class=" table table-striped table-hover">

                                    <thead>
                                    
                                    <tr>
                                        <th width="200">Sala</th>
                                        <th width="200">Reservada para</th>
                                        <th width="200">Reservada por</th>
                                    
                                    </tr>
                                    </thead>
                                    @foreach ($reservas as $reserva)
                                    <tr>
                                        <th width="200">{{$reserva->sala->nome}}</th>
                                        <th width="200">{{$reserva->data_reserva}}</th>
                                        <th width="200">{{$reserva->user->name}}</th>                                    
                                    </tr>
                                    @endforeach
                                    
                                </table>

                                
                                </div>


                        
                        </div>
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

@endsection