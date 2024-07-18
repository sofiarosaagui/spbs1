@extends('/admin')

@section('contenido')

<table class="table table-striped-columns text-white">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Producto</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Hora del pedido</th>

        <th></th>
       
      </tr>
    </thead>
    
    <tbody>

       @foreach ($orders as $order)
          
      <tr>
        <th scope="row">{{$order->id}}</th>
        <td>{{$order->product_name}}</td>
        <td>{{$order->quantity}}</td>
        <td>{{$order->time}}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection