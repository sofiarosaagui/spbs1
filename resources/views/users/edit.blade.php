@extends('/admin')

@section('contenido')


<form class="row g-3 needs-validation" novalidate action="/users/update/{{$user->id}}" method="POST">
  @csrf
  @method('PUT')

    <div class="col-md-3">
      <label for="validationCustom02" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationCustom02" name="name" value="{{$user->name}}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
      
    <div class="col-md-3">
      <label for="validationCustom02" class="form-label">last_name</label>
      <input type="text" class="form-control" id="validationCustom02" name="last_name" value="{{$user->last_name}}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Teléfono del user</label>
      <input type="tel" class="form-control" id="validationCustom04" name="phone"  placeholder="0000000000" maxlength="20" value="{{$user->phone}}" required>
      <div class="invalid-feedback">
        Por favor, proporciona un número de teléfono 
      </div>
    </div>

    <div class="col-md-2">
      <label for="validationCustom04" class="form-label">correo</label>
      <input type="email" class="form-control" id="validationCustom04" name="email" value="{{$user->email}}" required>
      <div class="invalid-feedback">
        Por favor, proporciona un número de teléfono 
      </div>
    </div>


    <div class="col-md-6">
      <label for="validationCustom05" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="validationCustom05" name="address" value="{{$user->address}}" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-3">
      <label for="validationCustom06" class="form-label">Imagen </label>
      <input style="color: white" type="file" class="form-control" id="validationCustom06" name="image" accept="image/*">
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-3">
      <label for="validationCustom06" class="form-label">Tipo</label>
      <select class="form-select" id="validationCustom06" name="type" required>
        <option disabled value="">Tipo...</option>
        <option {{$user->type=='ADMIN'?'selected':''}} >ADMIN</option>
        <option {{$user->type=='CLIENTE'?'selected':''}} >CLIENTE</option>
      </select>
    </div>

    <div class="col-md-3">
      <label for="validationCustom07" class="form-label">Estado</label>
      <select class="form-select" id="validationCustom07" name="status" required>
        <option  disabled value="">Estado...</option>
        <option {{$user->status=='Activo'?'selected':''}} >Activo</option>
        <option {{$user->status=='Inactivo'?'selected':''}} >Inactivo</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>

        <div class="col-12">

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
      <button class="btn btn-primary" type="submit"><strong style="text-transform: uppercase">Guardar</strong></button>
    </div>

  </form>
<br>
  <button class="btn btn-primary" type="submit"><strong style="text-transform: uppercase"><a href="{{ route('client.index') }}"> Volver </a></strong></button>

  <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
        }, false)
    })
    })()
</script>

@endsection