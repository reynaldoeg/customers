@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Listado de Clientes</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" data-whatever="@mdo">Agregar</button>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-hover" id="customers-table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>E-mail</th>
                                <th>Teléfono</th>
                                <th>Tarjeta de Crédito</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr id="row-{{$customer->id}}">
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->lastname}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->creditcard}}</td>
                                    <td>
                                        <button 
                                            type="button" class="btn btn-default btn-sm edit" 
                                            data-toggle="modal" data-target="#addModal" 
                                            data-save="update" 
                                            data-id="{{$customer->id}}" 
                                            data-name="{{$customer->name}}" 
                                            data-lastname="{{$customer->lastname}}" 
                                            data-email="{{$customer->email}}" 
                                            data-phone="{{$customer->phone}}" 
                                            data-creditcard="{{$customer->creditcard}}" 
                                            aria-label="Left Align">
                                          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </button>
                                    </td>
                                    <td>
                                        <button 
                                            type="button" class="btn btn-danger btn-sm" 
                                            data-toggle="modal" data-target="#deleteModal" 
                                            data-id="{{$customer->id}}" 
                                            data-name="{{$customer->name}}" 
                                            data-lastname="{{$customer->lastname}}" 
                                            aria-label="Left Align">
                                          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $customers->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">¿Seguro que desea eliminar al cliente?</h4>
      </div>
      <div class="modal-body">
        <div class="modal-body-content"></div>
        <img src="/img/spinner.gif" alt="spinner" class="spinner">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger deleteCustomer" data-id="">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<!-- ADD MODAL -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Cliente</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="lastname" class="control-label">Apellidos:</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
          </div>
          <div class="form-group">
            <label for="email" class="control-label">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="phone" class="control-label">Teléfono:</label>
            <input type="text" class="form-control" id="phone" name="phone" maxlength="20">
          </div>
          <div class="form-group">
            <label for="creditcard" class="control-label">Tarjeta de Crédito:</label>
            <input type="text" class="form-control" id="creditcard" name="creditcard" maxlength="16">
          </div>
          <input type="hidden" name="customerid" id="customerid" value="">
          <input type="hidden" name="update" id="update" value="">
        </form>
        <img src="/img/spinner.gif" alt="spinner" class="spinner">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="save">Gardar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    var token = '{{ csrf_token() }}';
</script>
@endsection
