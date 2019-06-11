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
                                <a href="/user/create" class="mb-5 btn btn-primary">Nova Reserva</a>
                            </div>
                        </div>

                        <table class=" table table-striped table-hover">

                                    <thead>
                                    <tr>
                                        <th width="200">Sala</th>
                                        <th width="200">Reservada por</th>
                                    
                                    </tr>
                                    </thead>

                                    <tr>
                                        <th width="200"><input type="text" readonly class="form-control" id="name" placeholder="Nome da Sala" value="Sala01"></th>
                                        <th width="200"><input type="text" readonly class="form-control" id="name" placeholder="Disponível" value=""></th>
                                        <th width="200"><input type="text" readonly class="form-control" id="name" placeholder="Ninguém" value=""></th>
                                        
                                    
                                    </tr>
                                    
                                    
                                </table>
                                 
                        <div class="form-group col-12 row">
                        <label class="mt-5" for="data_reserva">Buscar Reservas Disponíveis</label>
                                <input type="date" 
                                value="<?php echo date('d-m-y'); ?>" class="form-control" name="data_reserva" 
                                min="<?php echo $today = date("Y-m-d"); ?>" 
                                max="<?php echo date("Y-m-d", 
                                strtotime('+7 days'));?>">
                                <br> <br>
                                <button class="btn btn-success btn-lg btn-block">Buscar</button>
                                
                                
                                <table class=" table table-striped table-hover">

                                    <thead>
                                    <tr>
                                        <th width="200">Sala</th>
                                        <th width="200">Status</th>
                                        <th width="200">Reservada por</th>
                                    
                                    </tr>
                                    </thead>

                                    <tr>
                                        <th width="200"><input type="text" readonly class="form-control" id="name" placeholder="Nome da Sala" value="Sala01"></th>
                                        <th width="200"><input type="text" readonly class="form-control" id="name" placeholder="Ninguém" value=""></th>
                                        
                                    
                                    </tr>
                                    
                                    
                                </table>

                                
                                </div>

                              </div>
                        

                         
                                   
                            

                              

                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection