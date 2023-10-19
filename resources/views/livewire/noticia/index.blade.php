<div>
    <div>
        <div class="row">
            <div class="col-md-12">
                @include('livewire.noticia.create')
            </div>
            <div class="col-md-12">
                <input wire:model="search" class="form-control" type="search" placeholder="Buscar   ">
            </div>
            <div class="col-md-12" align="right">
                <small>Filtro por {{$fila}} en orden @if($orden == "asc") ascendente @else descendente @endif</small>
            </div>
        </div>
        <div class="row table-responsive">
            @if ($noticias->count())
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="cursor:pointer" wire:click="ordenar('id')">Código</th>
                            <th style="cursor:pointer" wire:click="ordenar('nombre')">Noticia</th>
                            <th style="cursor:pointer" wire:click="ordenar('stock')"></th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($noticias as $pro)
                            <tr>
                                <td>{{ $pro->id }}</td>
                                <td>
                                    @if($pro->foto)
                                        <img src="{{ asset('/images/noticias/'.$pro->foto) }}" style="width:40px;border-radius:50px;">
                                    @endif
                                    {{ $pro->nombre }}
                                </td>
                                <td>{{ $pro->stock }}</td>
                                <td> 
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" wire:click="$set('noticias_id', {{ $pro->id }})" data-target="#viewModal{{ $pro->id }}"><i class="far fa-eye"></i></button>
                                    <!-- Modal view-->
                                    @include('livewire.noticia.modal.modalwievnoticias')
                                    
                                    <button wire:click="edit({{ $pro->id }})" class="btn btn-sm btn-info"><i class="far fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{ $pro->id }}"><i class="far fa-trash-alt"></i></button>
                                    <!-- Modal  delete-->

                                    @include('livewire.noticia.modal.modaldelete')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="col-12 alert alert-info">
                    No se encuentran registros para {{ $search }}
                </div>
            @endif
            <div class="col-md-12">
                {{$noticias->links()}}
            </div>
        </div>
    
    
        @section('adminlte_js')
            <script> console.log('Hi!, {{Auth::user()->name}}'); </script>
            <script>
                window.livewire.on('alert', param => {
                    toastr[param['type']](param['message']);
                });
            </script>
            <script>
                $('#descripcion').summernote({
                    height: 50,
                    codemirror: {
                        theme: 'monokai'
                    },
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('descripcion', contents);
                        }
                    }
                });
    
                Livewire.on('descripcion', descripcion => {
                    $('#descripcion').summernote('code', descripcion);
                });
    
                $("#nombre").keyup(function () {
                    var value = $(this).val();
                    var slug = function(str) {
                        var $slug = '';
                        var trimmed = $.trim(str);
                        $slug = trimmed.replace(/ß/g,"ss").
                        replace(/ /g,"-").
                        replace(/[àáâãäå]/g,"a").
                        replace(/æ/g,"ae").
                        replace(/ç/g,"c").
                        replace(/[èéêë]/g,"e").
                        replace(/[ìíîï]/g,"i").
                        replace(/ñ/g,"n").
                        replace(/[òóôõö]/g,"o").
                        replace(/œ/g,"oe").
                        replace(/[ùúûü]/g,"u").
                        replace(/[ýÿ]/g,"y");
                        return $slug.toLowerCase();
                    }
                    @this.set('slug', slug(value));
                });
    
                $('#categorias_id').select2();
                $('#categorias_id').on('change', function (e) {
                    var data = $('#categorias_id').select2("val");
                    @this.set('categorias_id', data);
                });
                // Separador de miles
                function formatNumber(n) {
                    n = String(n).replace(/\D/g, ""); // Eliminar caracteres no numéricos
                    return n === '' ? n : n.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                }
                $(".number").keyup(function(e){
                    const element = e.target;
                    const value = element.value;
                    var Myelement = document.getElementById(element.id);
                    var parse = formatNumber(value);
                    Myelement.value = parse;
                    @this.set(element.id, parse);
                });
    
                Livewire.on('precio', precio => {
                    $('#precio').val(precio);
                });
                Livewire.on('precio2', precio2 => {
                    $('#precio2').val(precio2);
                });
                Livewire.on('precio3', precio3 => {
                    $('#precio3').val(precio3);
                });
                Livewire.on('oferta', oferta => {
                    $('#oferta').val(oferta);
                });
                 Livewire.on('stock', stock => {
                    $('#stock').val(stock);
                });
            </script>
        @stop
    </div>
</div>
