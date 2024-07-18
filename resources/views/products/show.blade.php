@extends('/admin')

@section('contenido')


<form class="row g-3 needs-validation" novalidate action="/products/delete/{{$product->id}}" method="POST">
  @csrf
  @method('DELETE')

    <div class="col-md-3">
      <label for="validationCustom01" class="form-label">Proveedor: {{$product->supplier->name}}</label>
      {{-- <input type="number" class="form-control" id="validationCustom01" name="supplier_name" value="{{$product->supplier->name}}" disabled> --}}
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
      
    <div class="col-md-3">
      <label for="validationCustom02" class="form-label">Nombre del Producto</label>
      <input type="text" class="form-control" id="validationCustom02" name="name"  value="{{$product->name}}" disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom03" class="form-label">Precio</label>
      <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" class="form-control" id="validationCustom03" name="price" step="0.01" min="0" value="{{$product->price}}" disabled>
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6">
      <label for="validationCustom04" class="form-label">Descripción</label>
      <input type="text" class="form-control" id="validationCustom04" maxlength="255" name="description" value="{{$product->description}}" disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Existencia</label>
      <input type="number" class="form-control" id="validationCustom05" name="existence" min="0"  value="{{$product->existence}}" disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom06" class="form-label">Tipo</label>
      <select class="form-select" id="validationCustom06" name="type" required>
        <option disabled value="">Tipo...</option>
        <option {{$product->type=='Pestañas'?'selected':''}} >Pestañas</option>
        <option {{$product->type=='Pinzas'?'selected':''}} >Pinzas</option>
        <option {{$product->type=='Shampoo'?'selected':''}} >Shampoo</option>
        <option {{$product->type=='Pegamento'?'selected':''}} >Pegamento</option>
      </select>
    </div>
 

    <div class="col-md-6">
      <label for="validationCustom07" class="form-label">Capacidad</label>
      <input type="number" class="form-control" id="validationCustom07"  pattern="[0-9]+(\.[0-9]+)?"  name="capability"  value="{{$product->capability}}" min="1.00" disabled>
      <div class="valid-feedback">
      ¡Se ve bien!
      </div>
     </div>

     <div class="col-md-3">
      <label for="validationCustom06" class="form-label">Tipo (capacidad)</label>
      <select class="form-select" id="validationCustom06" name="capability_type" required>
        <option disabled value="">Tipo...</option>
        <option {{$product->capability_type=='ml'?'selected':''}} >ml</option>
        <option {{$product->capability_type=='mm'?'selected':''}} >mm</option>
        <option {{$product->capability_type=='cm'?'selected':''}} >cm</option>
      </select>
    </div>

     <div class="col-md-6">
      <label for="validationCustom08" class="form-label">Color</label>
      <input type="color" class="form-control" id="validationCustom08"  name="color"  value="{{$product->color}}" disabled>
      <div class="valid-feedback">
      ¡Se ve bien!
      </div>
     </div>

     <div class="col-md-3">
      <label for="validationCustom09" class="form-label">Imagen 1</label>
      <img src="/storage/{{$product->image_1}}" alt="{{$product->image_1}}" width="100px">
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3">
      
      <label for="validationCustom10" class="form-label">Imagen 2</label>
      <td><img src="/storage/{{$product->image_2}}" alt="{{$product->image_2}}" width="100px"></td>
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom11" class="form-label">Imagen 3</label>
      <td><img src="/storage/{{$product->image_3}}" alt="{{$product->image_3}}" width="100px"></td>
      <div class="invalid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom12" class="form-label">Estado</label>
      <select class="form-select" id="validationCustom12" name="status" >
        <option  disabled value="">Estado...</option>
        <option {{$product->status=='Activo'?'selected':''}} >Activo</option>
        <option {{$product->status=='Inactivo'?'selected':''}} >Inactivo</option>
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