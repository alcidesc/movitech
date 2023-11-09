@if($updateMode)
    <div class="card card-warning {{$collapsed}}">
        <div class="card-header" wire:click="collapsed">
            <h3 class="card-title">Editar Noticias</h3>
@else
    <div class="card card-primary {{$collapsed}}">
        <div class="card-header" wire:click="collapsed">
            <h3 class="card-title">Crear Noticias</h3>
@endif
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas {{$collapsedicon}}"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" align="center">
                        <label>Foto de la Noticia:</label><br>
                        @if($updateMode)
                            @if($fotoupdate) 
                                <img src="{{ $fotoupdate->temporaryUrl() }}" width="200px;">
                            @else
                                <img src="{{ asset('/images/noticias/'.$foto) }}" width="200px;">
                            @endif
                            <input type="file" class="form-control" wire:model="foto" accept="image/jpeg, image/png, image/bmp">
                        @else
                            @if($foto) 
                                <img src="{{ $foto->temporaryUrl() }}" width="200px;">
                            @else
                                <img src="{{ asset('imgsystem/producto.png') }}" width="200px;">
                            @endif
                            <input type="file" class="form-control" wire:model="foto" accept="image/jpeg, image/png, image/bmp">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Nombre de la Noticia:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-shopping-bag"></i></span>
                        </div>
                        <input type="text" id="nombre" class="form-control @error('nombre') is-invalid @enderror" wire:model="nombre" placeholder="Nombre del producto" required>
                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Enlace de la Noticia:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-code"></i></span>
                        </div>
                        <input type="text" id="slug" class="form-control @error('slug') is-invalid @enderror" wire:model="slug" placeholder="Enlace del producto">
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group" wire:ignore>
                        <label for="informacion">Descripción del Servicio</label>
                        <textarea id="descripcion" class="textarea form-control"  required></textarea>
                    </div>
                    @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            @if($updateMode)
                <button wire:click.prevent="update()" class="btn btn-warning">Actualizar</button>
                <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
            @else
                <button wire:click.prevent="store()" class="btn btn-primary">Guardar</button>
            @endif
        </form>
    </div>
</div>

