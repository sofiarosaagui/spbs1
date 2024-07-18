@extends('/admin')

@section('contenido')

<div style="width:30%;  margin-left: auto;  margin-right: auto;">
    <form method="GET" action="{{ route('admin.orders') }}">
        <div class="mb-3">
            <label for="statusFilter" class="form-label">Filtrar por estatus:</label>
            <select name="status" id="statusFilter" class="form-control">
                <option value="">-</option>
                <option value="Cancelado" @if($statusFilter == 'Cancelado') selected @endif>Cancelado</option>
                <option value="Pagado" @if($statusFilter == 'Pagado') selected @endif>Pagado</option>
                <option value="Enviado" @if($statusFilter == 'Enviado') selected @endif>Enviado</option>
                <option value="Entregado" @if($statusFilter == 'Entregado') selected @endif>Entregado</option>
                <option value="Pendiente" @if($statusFilter == 'Pendiente') selected @endif>Pendiente</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="dateOrderFilter" class="form-label">Ordenar por fecha:</label>
            <select name="order_by_date" id="dateOrderFilter" class="form-control">
                <option value="">-</option>
                <option value="0" @if($dateOrderFilter == '0') selected @endif>Descendente</option>
                <option value="1" @if($dateOrderFilter == '1') selected @endif>Ascendente</option>
            </select>
        </div>

        <button style="color: blueviolet" type="submit" class="btn">Aplicar Filtros</button>
        <a style="color: crimson" href="{{ route('admin.orders') }}">Restablecer Filtros</a>
    </form>
</div><br><hr>

<table class="table table-striped-columns text-white">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Hora del pedido</th>
            <th scope="col">Total</th>
            <th scope="col">Dirección</th>
            <th scope="col">Estado</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->time}}</td>
            <td>${{$order->price}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->status}}</td>

            <td>
                <div class="box" style="color:black">
                    <form action="{{ route('update.order', ['orderId' => $order->id]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                        <select name="update_payment" class="drop-down">
                            <option value="Cancelado" @if($order->status == 'Cancelado') selected @endif>Cancelado</option>
                            <option value="Pagado" @if($order->status == 'Pagado') selected @endif>Pagado</option>
                            <option value="Enviado" @if($order->status == 'Enviado') selected @endif>Enviado</option>
                            <option value="Entregado" @if($order->status == 'Entregado') selected @endif>Entregado</option>
                        </select>
                        <td><input style="color: blueviolet" type="submit" class="option-btn" value="Actualizar"></td>
                    </form>
                </div>
            </td>
            <td><a href="{{route ('orders.show',['id' =>$order->id])}}"><button
                        class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-purple-500">Detalle</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
