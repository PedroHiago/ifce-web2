@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservas</div>
                    <div class="panel-body">
                        <div class="d-flex">
                            <div class="p-2">
                                <label class="mt-5" for="data_reserva">Minhas Reservas</label>
                            </div>
                            <div class="ml-auto p-2">
                                <a href="{{ route('criar-reservas')}}" class="mb-5 btn btn-primary">Nova Reserva</a>
                            </div>
                        </div>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <table class=" table table-striped table-hover">

                                    <thead>
                                    <tr>
                                        <th width="200">Sala</th>
                                        <th width="200">Data</th>
                                    
                                    </tr>
                                    </thead>
                                    @foreach ($reservas as $reserva)
                                    <tr>
                                        <th width="200">{{ $reserva->sala->nome}}</th>  
                                        <th width="200">{{ $reserva->data_reserva}}</th>                            
                                    
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