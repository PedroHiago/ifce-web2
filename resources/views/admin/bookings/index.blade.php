@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="container">
        <div clas="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservas</div>

                    <div class="panel-body">

                        
                            <div class="form-group col-4 row">
                                <label for="data_reserva">Listar reservas:</label>
                                <input type="date" value="<?php echo date('d-m-y'); ?>" class="form-control" name="data_reserva" min="<?php echo $today = date("Y-m-d"); ?>" max="<?php echo date("Y-m-d", strtotime('+7 days'));?>">
                               <input type="submit" class="btn btn-success" value="buscar">
                              </div>

                              <a href="" class="btn btn-primary">Nova Reserva</a><br><br>

                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                 <th width="200">Sala</th>
                                <th width="200">Status</th>
                              
                            </tr>
                            </thead>
                             
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection