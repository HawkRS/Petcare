<input type="text" name="autor" value="{{ Auth::user()->id }}" hidden>

<div class="row">

  <div class="col-12 col-md-6 col-lg-3">
    <div class="mb-3">
      <label class="form-label" for="title">Título</label>
      @if(isset($PostEdit))
      <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" placeholder="Título de la entrada" value="{{$PostEdit->title}}" required>
      @else
      <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" placeholder="Título de la entrada" required>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega un nombre válido
      </div>
      @error('title')
      <div class="invalid-feedback d-block">
        {{ $errors->first('title') }}
      </div>
      @enderror
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-3">
    <div class="mb-3">
      <label class="form-label" for="slug">Link del artículo</label>
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
      <div class="invalid-feedback d-block">
        {{ $errors->first('slug') }}
      </div>
      @enderror
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-3">
    <div class="mb-3">
      <label class="form-label" for="published">Estatus de publicación</label>
      <select class="form-select" name="published" id="published">
        @if (isset($PostEdit) )
        @if($PostEdit->published == 0)
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

  <div class="col-12 col-md-6 col-lg-3">
    <div class="mb-3">
      <label for="formFile" class="form-label">Imagen de portada <small>(Max 1920px X 1200px)</small></label>
      <input name="portada" class="form-control" type="file" id="formFile">
    </div>
    @error('portada')
      <div class="invalid-feedback d-block">
        {{ $errors->first('portada') }}
      </div>
    @enderror
  </div>

</div>

<div class="row">
  <div class="col-12">
    <div class="mb-3">
      <label for="body" class="form-label">Cuerpo</label>
      @if(isset($PostEdit->body))
      <textarea class="form-control  {{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" id="body">{{$PostEdit->body}}</textarea>
      @else
      <textarea class="form-control  {{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" id="body"></textarea>
      @endif
      <div class="valid-feedback">
        ¡Todo parece en orden!
      </div>
      <div class="invalid-feedback">
        Por favor agrega una descripción
      </div>
      @error('body')
        <div class="invalid-feedback d-block">
          {{ $errors->first('body') }}
        </div>
      @enderror
    </div>
  </div>
</div>
<?php $url = url('/') ?>
<script>
  var CurrentUrl = JSON.parse('<?php echo json_encode($url); ?>');
</script>