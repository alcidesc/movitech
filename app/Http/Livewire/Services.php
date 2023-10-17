<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Service;



class Services extends Component{

    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';
    public $search='';

    public $collapsed="collapsed-card",$collapsedicon="fa-plus";
    public $foto='';
    public $updateMode = false,$fila="id",$orden="desc";
    public $nombre, $services_id, $descripcion, $iva, $codigo;
    public $slug, $precio,$oferta,$precio2,$precio3,$validated,$fotoupdate;

    public function render(){

        $services = service::where('estado',1)->where('nombre','LIKE','%'.$this->search.'%')->paginate(20);
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
        $this->collapsed="collapsed-card";
        $this->collapsedicon="fa-plus";
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nombre' => 'required',
        ]);


        service::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'codigo' => $this->codigo,
            'precio' => $this->precio,
            'slug' => $this->slug,
            'precio2' => $this->precio2,
            'precio3' => $this->precio3,
            'iva' => $this->iva,
            'oferta' => $this->oferta,
        ]);

        $this->emit('alert', ['type' => 'success', 'message' => 'Servicio se a agregado correctamente!']);

        $this->resetInputFields();

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $services = service::where('id',$id)->first();
        $this->nombre = $services->nombre;
        $this->codigo = $services->codigo;
        $this->services_id = $services->id;
        $this->descripcion = $services->descripcion;
        $this->precio = $services->precio;
        $this->slug = $services->slug;
        $this->precio2 = $services->precio2;
        $this->precio3 = $services->precio3;
        $this->oferta = $services->oferta;
        $this->iva = $services->iva;
        
        $this->collapsed = "";
        $this->collapsedicon = "fa-minus";   
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nombre' => 'required',

        ]);

        if ($this->services_id) {
            $service = service::find($this->services_id);
            $service->update([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'codigo' => $this->codigo,
                'precio' => $this->precio,
                'slug' => $this->slug,
                'precio2' => $this->precio2,
                'precio3' => $this->precio3,
                'iva' => $this->iva,
            ]);
            $this->updateMode = false;
            $this->emit('alert', ['type' => 'success', 'message' => 'Proveedor actualizado correctamente!']);
            $this->resetInputFields();

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
}
