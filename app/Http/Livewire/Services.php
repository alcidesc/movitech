<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Service;
use Livewire\WithFileUploads;
use Image, file;


class Services extends Component{

    use WithPagination;
    use WithFileUploads;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';
    public $search='';

    public $collapsed="collapsed-card",$collapsedicon="fa-plus";
    public $foto;
    public $updateMode = false,$fila="id",$orden="desc";
    public $nombre, $services_id, $descripcion, $iva, $codigo;
    public $slug, $precio,$oferta,$precio2,$precio3,$validated,$fotoupdate;

    public function render(){

        $services = Service::where('estado',1)->where('nombre','LIKE','%'.$this->search.'%')->paginate(20);
        return view('livewire.services.index',["services"=>$services]);
    }

    private function resetInputFields(){
        $this->nombre = '';
        $this->descripcion = '';
        $this->codigo = '';
        $this->precio= '';
        $this->precio2= '';
        $this->precio3= '';
        $this->oferta= '';
        $this->iva= '';
        $this->foto = '';
        $this->collapsed="collapsed-card";
        $this->collapsedicon="fa-plus";
    }

    public function store()
    {
        //$validatedData = $this->validate([
            // 'nombre' => ['required', 'unique:productos'],
            // 'slug' => ['required', 'unique:productos'],
            // 'codigo' => ['required', 'unique:productos'],
            // 'precio' => 'required',
            // 'stock' => 'required',
            // 'categorias_id' => 'required',
        // ],
        // [
            // 'nombre.unique' => 'El nombre de producto ya está en uso',
            // 'slug.unique' => 'El enlace ya está en uso',
            // 'codigo.unique' => 'El código ya está en uso',
        // ]);
    
        $nombreFoto = '';
        if ($file = $this->foto) {
            $control = 0;
            $nombreFoto = rand() . "." . $file->getClientOriginalExtension();
            while ($control == 0) {
                if (is_file(public_path() . '/images/servicios/' . $nombreFoto)) {
                    $nombreFoto = rand() . $nombreFoto;
                } else {
                    Image::make($this->foto)
                        ->heighten(1000)
                        ->save(public_path() . '/images/servicios/' . $nombreFoto);
                    $control = 1;
                }
            }
        }
    
        $service = new service;
        $service->nombre = $this->nombre;
        $service->descripcion = $this->descripcion;
        $service->slug = $this->slug;
        $service->codigo = $this->codigo;
        $service->precio = intval(str_replace(".", "", $this->precio));
        $service->precio2 = intval(str_replace(".", "", $this->precio2));
        $service->precio3 = intval(str_replace(".", "", $this->precio3));
        $service->oferta = intval(str_replace(".", "", $this->oferta));
        $service->iva = intval($this->iva);
        $service->estado = 1;
        $service->foto = $nombreFoto;
        $service->save();
    
    
        $this->emit('alert', ['type' => 'success', 'message' => '¡Servicio agregado correctamente!']);
        $this->resetInputFields();
        $this->collapsed = "collapsed-card";
        $this->collapsedicon = "fa-plus";
    }
    

    public function edit($id)
    {
        $this->updateMode = true;
        $service = service::where('id', $id)->first();
        $this->nombre = $service->nombre;
        $this->services_id = $service->id;
        $this->slug = $service->slug;
        $this->codigo = $service->codigo;
        $this->precio = $service->precio;
        $this->emit('precio', intval(str_replace(".", "", $service->precio)));
        $this->precio2 = $service->precio2;
        $this->emit('precio2', intval(str_replace(".", "", $service->precio2)));
        $this->precio3 = $service->precio3;
        $this->emit('precio3', intval(str_replace(".", "", $service->precio3)));
        $this->oferta = $service->oferta;
        $this->emit('oferta', intval(str_replace(".", "", $service->oferta)));
        $this->iva = $service->iva;
        $this->foto = $service->foto;
        $this->descripcion = $service->descripcion;
        $this->emit('descripcion', $service->descripcion);
    
        $this->collapsed = "";
        $this->collapsedicon = "fa-minus";      
    }

    public function update(){
        // $validatedDate = $this->validate([
        //     'nombre' => 'required|unique:productos,nombre,'.$this->producto_id,
        //     'slug' => 'required|unique:productos,slug,'.$this->producto_id,
        //     'codigo' => 'required|unique:productos,codigo,'.$this->producto_id,
        //     'precio' => 'required',
        //     'stock' => 'required',
        //     'categorias_id' => 'required',
        // ],
        // [ 
        //     'nombre.unique' => 'El nombre de producto ya esta en uso',
        //     'slug.unique' => 'El enlace ya esta en uso',
        //     'codigo.unique' => 'El código ya esta en uso',
        // ]); 

        if($this->services_id){
            $nombre='';
            if($file = $this->fotoupdate) {
                $control=0;
                $nombre = rand().".".$file->getClientOriginalExtension();
                while ($control == 0) {
                    if (is_file( public_path() . '/images/services/' . $nombre )) {
                        $nombre = rand() . $nombre;
                    }else{
                        Image::make($this->fotoupdate)
                            ->heighten(1000)
                            ->save(public_path() . '/images/services/' . $nombre);
                        $control=1;
                    }
                }
            }

                $service = service::find($this->services_id);
                $service ->nombre = $this->nombre;
                $service ->descripcion = $this->descripcion;
                $service ->slug = $this->slug;
                $service ->codigo = $this->codigo;
                $service ->precio = intval(str_replace(".", "", $this->precio));
                $service ->precio2 = intval(str_replace(".", "", $this->precio2));
                $service ->precio3 = intval(str_replace(".", "", $this->precio3));
                $service ->oferta = $this->oferta;
                $service ->iva = intval(str_replace(".", "", $this->iva));
                if ($nombre) {
                    $service->foto = $nombre;
                }

                 $service->update();

            $this->emit('alert', ['type' => 'success', 'message' => 'Producto editado correctamente!']);
            $this->resetInputFields();
            $this->collapsed="collapsed-card";
            $this->collapsedicon="fa-plus";
            $this->updateMode = false;
        }
    }
    
    public function delete($id)
    {
        if($id){
            $service = service::find($id);
            $service->estado=0;
            $service->update();
            $this->emit('alert', ['type' => 'error', 'message' => 'Service eliminado correctamente!']);
        }
    }
    public function collapsed(){
        if($this->collapsed){
            $this->collapsed="";
            $this->collapsedicon="fa-minus";
        }else{
            $this->collapsed="collapsed-card";
            $this->collapsedicon="fa-plus";
        }
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
        $this->collapsed="collapsed-card";
        $this->collapsedicon="fa-plus";
    }
    public function ordenar($fila){
        if($fila == $this->fila){
            if($this->orden == "asc"){
                $this->orden="desc";
            }else{
                $this->orden="asc";
            }
        }else{
            $this->fila=$fila;
            $this->orden="asc";
        }
    }
}
