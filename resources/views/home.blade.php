@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Listado de Clientes</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>E-mail</th>
                                <th>Teléfono</th>
                                <th colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <th>{{$customer->name}}</th>
                                    <th>{{$customer->lastname}}</th>
                                    <th>{{$customer->email}}</th>
                                    <th>{{$customer->phone}}</th>
                                    <th>
                                        <button type="button" class="btn btn-default" aria-label="Left Align">
                                          <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="btn btn-default" aria-label="Left Align">
                                          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="btn btn-default" aria-label="Left Align">
                                          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
