<?php

 ?>

<div class="row">
  <div class="col-12">
    <div class="mb-3">
      <label class="form-label" for="name">Nombre</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Nombre" value="{{$MarcadorEdit->name}}" required>
      @else
      <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Nombre" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
      @error('name')
        <div class="invalid-feedback d-block">
          {{ $errors->first('name') }}
        </div>
      @enderror
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="category">Categoria</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="category" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}" id="category" placeholder="Categoria" value="{{$MarcadorEdit->category}}" required>
      @else
      <input type="text" name="category" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}" id="category" placeholder="Categoria" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
      @error('category')
        <div class="invalid-feedback d-block">
          {{ $errors->first('category') }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="category">Estado</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="state" class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}" id="state" placeholder="Estado" value="{{$MarcadorEdit->state}}" required>
      @else
      <input type="text" name="state" class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}" id="state" placeholder="Estado" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
      @error('state')
        <div class="invalid-feedback d-block">
          {{ $errors->first('state') }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="city">Ciudad</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="city" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" id="city" placeholder="Ciudad" value="{{$MarcadorEdit->city}}" required>
      @else
      <input type="text" name="city" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" id="city" placeholder="Ciudad" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
      @error('city')
        <div class="invalid-feedback d-block">
          {{ $errors->first('city') }}
        </div>
      @enderror
    </div>
  </div>
</div>
<div class="row">
    <div class="col-12">
      <div class="mb-3">
        <label class="form-label" for="address">Dirección</label>
        @if(isset($MarcadorEdit))
        <input type="text" name="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" id="address" placeholder="Dirección" value="{{$MarcadorEdit->address}}" required>
        @else
        <input type="text" name="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" id="address" placeholder="Dirección" required>
        @endif
        <div class="valid-feedback">
          ¡Todo parece en orden!
        </div>
        <div class="invalid-feedback">
          Por favor agrega un titulo válido
        </div>
        @error('address')
          <div class="invalid-feedback d-block">
            {{ $errors->first('address') }}
          </div>
        @enderror
      </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
      <div class="mb-3">
        <label class="form-label" for="address2">Dirección 2</label>
        @if(isset($MarcadorEdit))
        <input type="text" name="address2" class="form-control {{ $errors->has('address2') ? ' is-invalid' : '' }}" id="address2" placeholder="Segunda dirección" value="{{$MarcadorEdit->address2}}" >
        @else
        <input type="text" name="address2" class="form-control {{ $errors->has('address2') ? ' is-invalid' : '' }}" id="address2" placeholder="Segunda dirección" >
        @endif
        <div class="valid-feedback">
          ¡Todo parece en orden!
        </div>
        <div class="invalid-feedback">
          Por favor agrega un titulo válido
        </div>
        @error('address2')
          <div class="invalid-feedback d-block">
            {{ $errors->first('address2') }}
          </div>
        @enderror
      </div>
    </div>
</div>
<div class="row">
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="postal">Código postal</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="postal" class="form-control {{ $errors->has('postal') ? ' is-invalid' : '' }}" id="postal" placeholder="Código postal" value="{{$MarcadorEdit->postal}}" required>
      @else
      <input type="text" name="postal" class="form-control {{ $errors->has('postal') ? ' is-invalid' : '' }}" id="postal" placeholder="Código postal" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
      @error('postal')
        <div class="invalid-feedback d-block">
          {{ $errors->first('postal') }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="phone">Telefono</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" placeholder="Telefono" value="{{$MarcadorEdit->phone}}" required>
      @else
      <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" placeholder="Telefono" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
      @error('phone')
        <div class="invalid-feedback d-block">
          {{ $errors->first('phone') }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="phone2">Telefono 2</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="phone2" class="form-control {{ $errors->has('phone2') ? ' is-invalid' : '' }}" id="phone2" placeholder="Telefono 2" value="{{$MarcadorEdit->phone2}}">
      @else
      <input type="text" name="phone2" class="form-control {{ $errors->has('phone2') ? ' is-invalid' : '' }}" id="phone2" placeholder="Telefono 2">
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un titulo válido
      </div>
      @error('phone2')
        <div class="invalid-feedback d-block">
          {{ $errors->first('phone2') }}
        </div>
      @enderror
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="lat">Latitud</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="lat" class="form-control {{ $errors->has('lat') ? ' is-invalid' : '' }}" id="lat" placeholder="Latitud" value="{{$MarcadorEdit->lat}}" required>
      @else
      <input type="text" name="lat" class="form-control {{ $errors->has('lat') ? ' is-invalid' : '' }}" id="lat" placeholder="Latitud" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una latitud valida
      </div>
      @error('lat')
        <div class="invalid-feedback d-block">
          {{ $errors->first('lat') }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="lng">Longitud</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="lng" class="form-control {{ $errors->has('lng') ? ' is-invalid' : '' }}" id="lng" placeholder="Longitud" value="{{$MarcadorEdit->lng}}" required>
      @else
      <input type="text" name="lng" class="form-control {{ $errors->has('lng') ? ' is-invalid' : '' }}" id="lng" placeholder="Longitud" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una longitud valida
      </div>
      @error('lng')
        <div class="invalid-feedback d-block">
          {{ $errors->first('lng') }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="date">Fecha</label>
      @if(isset($MarcadorEdit))
      <input type="date" name="date" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}" id="date" placeholder="Fecha" value="{{$MarcadorEdit->date}}" required>
      @else
      <input type="date" name="date" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}" id="date" placeholder="Fecha" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una fecha valida
      </div>
      @error('date')
        <div class="invalid-feedback d-block">
          {{ $errors->first('date') }}
        </div>
      @enderror
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-6">
    <div class="mb-3">
      <label class="form-label" for="web">Sitio web</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="web" class="form-control {{ $errors->has('web') ? ' is-invalid' : '' }}" id="web" placeholder="Sitio web" value="{{$MarcadorEdit->web}}">
      @else
      <input type="text" name="web" class="form-control {{ $errors->has('web') ? ' is-invalid' : '' }}" id="web" placeholder="Sitio web">
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una Sitio web valida
      </div>
      @error('web')
        <div class="invalid-feedback d-block">
          {{ $errors->first('web') }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12 col-md-6">
    <div class="mb-3">
      <label class="form-label" for="linkmap">Link map</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="linkmap" class="form-control" id="linkmap" placeholder="Link map" value="{{$MarcadorEdit->linkmap}}" required>
      @else
      <input type="text" name="linkmap" class="form-control" id="linkmap" placeholder="Link map" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una Link map valida
      </div>
    </div>
  </div>
</div>
{{--<div class="row">
  <div class="col-12 col-md-6">
    <div class="mb-3">
      <label class="form-label" for="featured">Featured</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="featured" class="form-control" id="featured" placeholder="Featured" value="{{$MarcadorEdit->featured}}" >
      @else
      <input type="text" name="featured" class="form-control" id="featured" placeholder="Featured" >
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una Featured valida
      </div>
    </div>
  </div>
  <div class="col-12 col-md-6">
    <div class="mb-3">
      <label class="form-label" for="features">Features</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="features" class="form-control" id="features" placeholder="Features" value="{{$MarcadorEdit->features}}" >
      @else
      <input type="text" name="features" class="form-control" id="features" placeholder="Features" >
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una Features valida
      </div>
    </div>
  </div>
</div>--}}
<div class="row">
  <div class="col-12 col-md-6">
    <div class="mb-3">
      <label class="form-label" for="hours1">Horarios</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="hours1" class="form-control" id="hours1" placeholder="Horarios" value="{{$MarcadorEdit->hours1}}" >
      @else
      <input type="text" name="hours1" class="form-control" id="hours1" placeholder="Horarios" >
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una Horarios 1 valida
      </div>
    </div>
  </div>
  {{-- 
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="hours2">Horarios 2</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="hours2" class="form-control" id="hours2" placeholder="Horarios 2" value="{{$MarcadorEdit->hours2}}" >
      @else
      <input type="text" name="hours2" class="form-control" id="hours2" placeholder="Horarios 2" >
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una Horarios 2 valida
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4">
    <div class="mb-3">
      <label class="form-label" for="hours2">Horarios 3</label>
      @if(isset($MarcadorEdit))
      <input type="text" name="hours3" class="form-control" id="hours3" placeholder="Horarios 3" value="{{$MarcadorEdit->hours3}}" >
      @else
      <input type="text" name="hours3" class="form-control" id="hours3" placeholder="Horarios 3" >
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una Horarios 3 valida
      </div>
    </div>
  </div>--}}
  <div class="col-12 col-md-6">
    <div class="mb-3">
      <label class="form-label" for="hours2">Estatus de publicación</label>
        <select class="form-select" name="type" id="type">
      @if (isset($MarcadorEdit) )
        @if($MarcadorEdit->published == 0)
          <option value=-1 >Elige una de las opciones de publicación...</option>
          <option value=0 selected >No publicado</option>
          <option value=1 >Publicado</option>

        @else
          <option value=-1 >Elige una de las opciones de publicación...</option>
          <option value=0 >No publicado</option>
          <option value=1 selected>Publicado</option>
        @endif
      @else
          <option value=-1 selected>Elige una de las opciones de publicación...</option>
          <option value=0 >No publicado</option>
          <option value=1 >Publicado</option>
      @endif
    </select>
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una Horarios 3 valida
      </div>
    </div>
  </div>
</div>