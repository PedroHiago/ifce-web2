@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">criar, atualizar e excluir Salas</div>
                    <div class="panel-body">
                        <div class="form-group col-12 row">
                                    <table class=" table table-striped table-hover">

                                    <thead>
                                    <tr>
                                        <th width="200">Adicionar Salas</th>
                                    
                                    </tr>
                                    </thead>
                                    
                                </table>
                                <form class="form-inline">
                                    <div class="form-group mx-sm-3">
                                        <label for="inputPassword2" class="sr-only">Password</label>
                                        <input type="text" class="form-control" id="nomes" placeholder="Nome da sala">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Adicionar</button>
                                </form>

                                <table class="mt-5 table table-striped table-hover">

                                    <thead>
                                    <tr>
                                        <th width="200">Lista de Salas Adicionadas</th>
                                    
                                    </tr>
                                    </thead>

                                    <tr>
                                        <th width="200"><input type="text" class="form-control" id="name" placeholder="Nome da Sala" value="Sala01"></th>
                                        <th width="200"><button class="btn btn-info">atualizar</button></th>
                                        <th width="200"><button class="btn btn-danger">Excluir</button></th>
                                    
                                    </tr>
                                    
                                </table>

                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection