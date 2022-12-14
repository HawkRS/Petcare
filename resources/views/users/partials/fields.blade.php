<div class="row">
  <div class="col-12">
    <div class="mb-3">
      <label class="form-label" for="name">Nombre</label>
      @if(isset($Usuario))
      <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Nombre" value="{{$Usuario->name}}" required>
      @else
      <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Nombre" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un nombre
      </div>
      @error('name')
        <div class="invalid-feedback d-block">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12">
    <div class="mb-3">
      <label class="form-label" for="email">Correo Electrónico</label>
      @if(isset($Usuario))
      <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="Escibe un correo eletrónico" value="{{$Usuario->email}}" required>
      @else
      <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="Escibe un correo eletrónico" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un correo valido
      </div>
      @error('email')
        <div class="invalid-feedback d-block">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12">
    <div class="mb-3">
      <label class="form-label" for="password">Contraseña</label>
      @if(isset($Usuario))
      <input type="text" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Escribir una contraseña nueva, deja en blanco para mantenerla" >
      @else
      <input type="text" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Escibe una contraseña" required>
      @endif

      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una contraseña valida, minimo 8 caracteres.
      </div>
      @error('password')
        <div class="invalid-feedback d-block">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>
  <div class="col-12">
    <div class="mb-3">
      <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
      @if(isset($Usuario))
      <input type="text" name="password_confirmation" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password_confirmation" placeholder="Escribir una contraseña nueva, deja en blanco para mantenerla" >
      @else
      <input type="text" name="password_confirmation" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password_confirmation" placeholder="Escibe una contraseña" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una contraseña valida
      </div>
      @error('password')
        <div class="invalid-feedback d-block">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>
</div>