@extends('/admin')

@section('contenido')

<table class="table table-striped-columns text-white">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Hora del pedido</th>
        {{-- <th scope="col">Cantidad</th> --}}
        <th scope="col">Total</th>
        {{-- <th scope="col">Teléfono</th> --}}
        <th scope="col">Dirección</th>
        <th scope="col">Estado</th>
        <th scope="col">Cliente</th>
        {{-- <th scope="col">Producto</th> --}}
        <th></th>
       
      </tr>
    </thead>
    
    <tbody>

       @foreach ($orders as $order)
          
      <tr>
        <th scope="row">{{$order->id}}</th>
        <td>{{$order->time}}</td>
        {{-- <td>{{$order->quantity}}</td> --}}   
        <td>${{$order->price}}</td>
        {{-- <td>{{$order->phone}}</td> --}}
        <td>{{$order->address}}</td>
        <td><b style="text-transform:uppercase;color:<?php if($order['status'] == 'Inactivo'){ echo 'red'; }else{ echo 'green'; }; ?>">
          <?= $order['status']; ?></b> </td>

          <td>{{$order->cliente->name}} {{$order->cliente->last_name}}</td>
          {{-- <td>{{$order->product->name}}</td> --}}
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection