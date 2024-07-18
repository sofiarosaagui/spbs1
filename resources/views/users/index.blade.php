@extends('/admin')

@section('contenido')
{{-- <h1>{{$mensaje}}</h1> --}}

{{-- <button class="btn btn-primary"></button> --}}
{{-- <a button class="btn btn-primary" href="/users/create">Nuevo usere</a> --}}
<table class="table table-striped-columns text-white">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Dirección</th>
        <th scope="col">Imagen</th>
        <th scope="col">Tipo</th>
        <th scope="col">Estado</th>
        <th scope="col">Email</th>

        
        <th scope="col"></th>
        <th scope="col"></th>
       
      
      </tr>
    </thead>
    
    <tbody>
       {{-- repetir el ciclo  --}}
       @foreach ($Users as $user)
          
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->last_name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->address}}</td>
        <td><img src="/storage/{{$user->image}}" alt="{{$user->image}}" width="100px"></td>
        <td>{{$user->type}}</td>
        <td>{{$user->status}}</td>
        <td>{{$user->email}}</td>

        @auth
        <td><a href="/users/edit/{{$user->id}}"><button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-pink-500">Editar</button></a></td>
        @if(Auth::user()->type=='ADMIN')
        <td><a href="/users/show/{{$user->id}}"><button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Borrar</button></a></td>
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

<button><a button class="btn btn-primary" href="register"><strong style="text-transform:uppercase">Añadir user</strong></a></button>


  @endsection