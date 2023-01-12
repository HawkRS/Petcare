<input type="text" name="autor" value="{{ Auth::user()->id }}" hidden>

<div class="row">
  <div class="col-12 col-md-6">
    <div class="mb-3">
      <label class="form-label" for="title">Titulo</label>
      @if(isset($PostEdit))
      <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" placeholder="Titulo de la entrada" value="{{$PostEdit->title}}" required>
      @else
      <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" placeholder="Titulo de la entrada" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un nombre válido
      </div>
      @error('title')
        <div- class="invalid-feedback d-block">
          {{ $errors->first('title') }}
        </div>
      @enderror
    </div>
  </div>

  <div class="col-12 col-md-6">
    <div class="mb-3">
      <label class="form-label" for="slug">Slug</label>
      @if(isset($PostEdit))
      <input type="text" name="slug" class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}" id="slug" placeholder="Link de la entrada (usar '-' en vez de espacios)" value="{{$PostEdit->slug}}" required>
      @else
      <input type="text" name="slug" class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}" id="slug" placeholder="Link de la entrada (usar '-' en vez de espacios)" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un nombre válido
      </div>
      @error('slug')
        <div- class="invalid-feedback d-block">
          {{ $errors->first('slug') }}
        </div>
      @enderror
    </div>
  </div>

</div>

<div class="row">
  <div class="col-12">
    <div class="mb-3">
      <label for="body" class="form-label">Cuerpo</label>
      @if(isset($PostEdit->body))
      <textarea class="form-control  {{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" id="body" rows="10" required>{{$PostEdit->body}}</textarea>
      @else
      <textarea class="form-control  {{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" id="body" rows="10" required></textarea>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una descripción
      </div>
      @error('body')
        <div- class="invalid-feedback d-block">
          {{ $errors->first('slug') }}
        </div>
      @enderror
    </div>
  </div>
</div>