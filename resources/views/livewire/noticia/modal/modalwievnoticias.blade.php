<div class="modal fade" wire:ignore.self id="viewModal{{$pro->id}}" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $pro->nombre }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @if($pro->foto)
                        <div class="col-md-12" align="center">
                            <img src="{{ asset('/images/noticias/'.$pro->foto) }}" style="width:200px;border-radius:20px;">
                        </div>
                    @endif
                    <div class="col-md-4">
                        <label>Nombre del producto:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-shopping-bag"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{$pro->nombre}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Enlace del producto:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-code"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{$pro->slug}}" readonly>
                        </div>
                    </div>
                    @if($pro->descripcion)
                        <div class="col-12">
                            <div class="form-group">
                                <label for="informacion">Descripción del producto</label>
                                <?= $pro->descripcion ?>
                            </div>
                        </div>
                    @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>