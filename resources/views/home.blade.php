@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Listado de Clientes</h1>
                </div>

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
                                <tr id="row-{{$customer->id}}">
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
                                        <button 
                                            type="button" class="btn btn-danger" 
                                            data-toggle="modal" data-target="#deleteModal" 
                                            data-id="{{$customer->id}}" 
                                            data-name="{{$customer->name}}" 
                                            data-lastname="{{$customer->lastname}}" 
                                            aria-label="Left Align">
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
<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">¿Seguro que desea eliminar al cliente?</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger deleteCustomer" data-id="">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    var token = '{{ csrf_token() }}';
</script>
@endsection
