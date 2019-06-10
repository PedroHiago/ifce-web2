@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sistema de Recursos</div>

                <div class="card-body">
                    <center>
                    <br>
                    <img src="https://cdn.pixabay.com/photo/2016/04/01/10/17/blackboard-1299841_960_720.png" alt="" width="500">
                    </center>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
