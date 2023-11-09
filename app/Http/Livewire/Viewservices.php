<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\service;
use App\Models\Empresa;
use Livewire\WithPagination;
use Cart;

class Viewservices extends Component{
    protected $listeners = ['cartDelete' => 'render'];

    protected $queryString = ['search' => ['except' => '']];

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search='';

    public $limite;

    public function render(){
    
        $services = service::where('estado', 1)->where('nombre', 'LIKE', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(20);
        $empresa=Empresa::findOrFail(1); 
    return view('livewire.frontend.services', ["services" => $services,"empresa"=>$empresa]);
}

public function addcarrito($id){
    $service = Service::find($id);  
    if ($service->oferta) {
        $precio = $service->oferta;
    } else {
        $precio = $service->precio;
    }
    Cart::add(
        $id,
        $service->nombre,
        $precio,
        1,
        array("urlfoto" => $service->foto, "tipo" => "service"),
    );
    $this->emit('alert', ['type' => 'success', 'message' => 'Servicio agregado correctamente.']);
    $this->emit('cartAdded');
}

public function deletecarrito($id){ 
    Cart::remove([
        'id' => $id,
    ]);
    $this->emit('alert', ['type' => 'error', 'message' => 'Servicio eliminado correctamente.']);
    $this->emit('cartDelete');
}

}
