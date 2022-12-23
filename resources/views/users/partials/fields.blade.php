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