@extends('/admin')

@section('contenido')
{{-- <h1>{{$mensaje}}</h1> --}}

{{-- <button class="btn btn-primary"></button> --}}
{{-- <a button class="btn btn-primary" href="/products/create">Nuevo Producto</a> --}}
<table class="table table-striped-columns text-white">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Descripción</th>
        <th scope="col">Existencia</th>
        <th scope="col">Imagen 1</th>
        <th scope="col">Imagen 2</th>
        <th scope="col">Imagen 3</th>
        <th scope="col">Capacidad</th>
        <th scope="col">Color</th>
        <th scope="col">Tipo</th>
        <th scope="col">Estado</th>

        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody>
      {{-- repetir el ciclo  --}}
      @foreach ($products as $product)
 
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td><a href="/products/edit/{{$product->id}}">{{$product->supplier->name}}</a></td>
        <td>{{$product->name}}</td>
        <td>$ {{$product->price}}</td>
        <td>{{$product->description}} </td>
        <td>{{$product->existence}} unidades</td>
        
        <td><img src="/storage/{{$product->image_1}}" alt="{{$product->image_1}}" width="100px"></td>
        <td><img src="/storage/{{$product->image_2}}" alt="{{$product->image_2}}" width="100px"></td>
        <td><img src="/storage/{{$product->image_3}}" alt="{{$product->image_3}}" width="100px"></td>
       
        <td>{{$product->capability}} {{$product->capability_type}}</td>
        <td><input type="color" class="form-control" id="validationCustom08"  name="color"  value="{{$product->color}}" disabled>
        </td>
        <td>{{$product->type}}</td>
        <td>{{$product->status}}</td>

        @auth
        <td><a href="/products/edit/{{$product->id}}"><button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-pink-500">Editar</button></a></td>
        @if(Auth::user()->type=='ADMIN')
        <td><a href="/products/show/{{$product->id}}"><button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Borrar</button></a></td>
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

<button><a button class="btn btn-primary" href="/products/create"><strong style="text-transform:uppercase">Añadir Producto</strong></a></button>


  @endsection