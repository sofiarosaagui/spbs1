@extends('/admin')
@section('contenido')

<table class="table table-striped-columns text-white">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">fecha de pedido</th>
            <th scope="col">Total</th>
            <th scope="col">Dirección</th>
            <th scope="col">Estado</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

@foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->time}}</td>
            <td>${{$order->price}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->status}}</td>


            <td><a href="{{route ('orders.show',['id' =>$order->id])}}"><button
                        class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-purple-500">Detalle</button></a></td>
        </tr>
        @endforeach


</table>

@endsection