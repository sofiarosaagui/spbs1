@extends('/admin')

@section('contenido')


<form class="row g-3 needs-validation" novalidate action="/clients/delete/{{$client->id}}" method="POST">
  @csrf
  @method('DELETE')
 
  {{-- <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Id</label>
    <input type="number" class="form-control" id="validationCustom01" name="id" value="1" readonly>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div> --}}
    <div class="col-md-3">
      <label for="validationCustom02" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationCustom02" name="name" value="{{$client->name}}" disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
      
    <div class="col-md-3">


      <label for="validationCustom03" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="validationCustom03" name="last_name" value="{{$client->last_name}}" disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Teléfono del Cliente</label>
      <input type="tel" class="form-control" id="validationCustom04" name="phone"  placeholder="0000000000" maxlength="20" value="{{$client->phone}}" disabled>
      <div class="invalid-feedback">
        Por favor, proporciona un número de teléfono 
      </div>
    </div>

    <div class="col-md-6">
      <label for="validationCustom05" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="validationCustom05" name="address" value="{{$client->address}}" disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-3">
      <label for="validationCustom06" class="form-label">Imagen </label>
      {{-- <input type="file" class="form-control" id="validationCustom06" name="image" accept="image/*" disabled> --}}
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-3">
      <label for="validationCustom07" class="form-label">Estado</label>
      <select class="form-select" id="validationCustom07" name="status" disabled>
        <option  disabled value="">Estado...</option>
        <option {{$client->status=='Activo'?'selected':''}} >Activo</option>
        <option {{$client->status=='Inactivo'?'selected':''}} >Inactivo</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
        <div class="col-12">

      <style>
    
        button:hover {
          box-shadow: 0 0 5px magenta,
          0 0 25px magenta, 0 0 50px magenta,
          0 0 100px magenta, 0 0 200px magenta;
        }
    
       
      </style>
      <button class="btn btn-primary" type="submit"><strong style="text-transform: uppercase">Borrar</strong></button>
    </div>
  </form>

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