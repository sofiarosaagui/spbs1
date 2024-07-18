@extends('/admin')

@section('contenido')
{{-- <h1>{{$mensaje}}</h1> --}}

{{-- <button class="btn btn-primary"></button> --}}


<table class="table table-striped-columns text-white ">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Teléfono</th>
        {{-- <th scope="col">RFC</th> --}}
        <th scope="col">Dirección </th>
        <th scope="col">Imagen</th>
        <th scope="col">Estado</th>

        <th scope="col"></th>
        <th scope="col"></th>
      
      </tr>
    </thead>

    <tbody>
       {{-- repetir el ciclo  --}}
       @foreach ($suppliers as $supplier)
          
      <tr>
        <th scope="row">{{$supplier->id}}</th>
        <td>{{$supplier->name}}</td>
        <td>{{$supplier->phone}}</td>
        {{-- <td>{{$supplier->rfc}}</td> --}}
        <td>{{$supplier->address}}</td>
        <td><img src="/storage/{{$supplier->image}}" alt="{{$supplier->image}}" width="100px"></td>
        
        <td>{{$supplier->status}}</td>

        @auth
        <td><a href="/suppliers/edit/{{$supplier->id}}"><button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-pink-500">Editar</button></a></td>
        @if(Auth::user()->type=='ADMIN')
        <td><a href="/suppliers/show/{{$supplier->id}}"><button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Borrar</button></a></td>
        @endif  
        @endauth
      
       
      </tr>
      @endforeach
    </tbody>
    

  </table>

  <style>
      
    button {
      box-shadow: 0 0 5px magenta,
      0 0 25px magenta;
    }

    button:hover {
      box-shadow: 0 0 5px magenta,
      0 0 25px magenta, 0 0 50px magenta,
      0 0 100px magenta, 0 0 200px magenta;
    }

   
  </style>

  <button><a button class="btn btn-primary" href="/suppliers/create"><strong style="text-transform:uppercase">Añadir Proveedor</strong></a></button>

  @endsection