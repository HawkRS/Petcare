<div class="row">
  <div class="col-12">
    <div class="mb-3">
      <label class="form-label" for="name">Nombre</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" value="{{$MarcadorEdit->name}}" required>
      @else
      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="category">Categoria</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="category" class="form-control" id="category" placeholder="Categoria" value="{{$MarcadorEdit->category}}" required>
      @else
      <input type="text" name="category" class="form-control" id="category" placeholder="Categoria" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="category">Estado</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="state" class="form-control" id="state" placeholder="Estado" value="{{$MarcadorEdit->state}}" required>
      @else
      <input type="text" name="state" class="form-control" id="state" placeholder="Estado" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="city">Ciudad</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="city" class="form-control" id="city" placeholder="Ciudad" value="{{$MarcadorEdit->city}}" required>
      @else
      <input type="text" name="city" class="form-control" id="city" placeholder="Ciudad" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-12">
      <div class="mb-3">
        <label class="form-label" for="address">Dirección</label>
        @if(isset($MarcadorEdit))
        <input type="text" name="address" class="form-control" id="address" placeholder="Dirección" value="{{$MarcadorEdit->address}}" required>
        @else
        <input type="text" name="address" class="form-control" id="address" placeholder="Dirección" required>
        @endif
        <div class="valid-feedback">
          ¡Todo parece en orden!
        </div>
        <div class="invalid-feedback">
          Por favor agrega un titulo válido
        </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
      <div class="mb-3">
        <label class="form-label" for="address2">Dirección 2</label>
        @if(isset($MarcadorEdit))
        <input type="text" name="address2" class="form-control" id="address2" placeholder="Segunda dirección" value="{{$MarcadorEdit->address2}}" >
        @else
        <input type="text" name="address2" class="form-control" id="address2" placeholder="Segunda dirección" >
        @endif
        <div class="valid-feedback">
          ¡Todo parece en orden!
        </div>
        <div class="invalid-feedback">
          Por favor agrega un titulo válido
        </div>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="postal">Código postal</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="postal" class="form-control" id="postal" placeholder="Código postal" value="{{$MarcadorEdit->postal}}" required>
      @else
      <input type="text" name="postal" class="form-control" id="postal" placeholder="Código postal" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="phone">Telefono</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefono" value="{{$MarcadorEdit->phone}}" required>
      @else
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefono" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="phone2">Telefono 2</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="phone2" class="form-control" id="phone2" placeholder="Telefono 2" value="{{$MarcadorEdit->phone2}}">
      @else
      <input type="text" name="phone2" class="form-control" id="phone2" placeholder="Telefono 2">
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="lat">Latitud</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="lat" class="form-control" id="lat" placeholder="Latitud" value="{{$MarcadorEdit->lat}}" required>
      @else
      <input type="text" name="lat" class="form-control" id="lat" placeholder="Latitud" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una latitud valida
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="lng">Longitud</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="lng" class="form-control" id="lng" placeholder="Longitud" value="{{$MarcadorEdit->lng}}" required>
      @else
      <input type="text" name="lng" class="form-control" id="lng" placeholder="Longitud" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una longitud valida
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="date">Fecha</label>
      @if(isset($MarcadorEdit))
      <input type="date" name="date" class="form-control" id="date" placeholder="Fecha" value="{{$MarcadorEdit->date}}" required>
      @else
      <input type="date" name="date" class="form-control" id="date" placeholder="Fecha" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una fecha valida
      </div>
    </div>
  </div>
</div>