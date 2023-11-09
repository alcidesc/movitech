<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Noticias;
use Image, file;



class Noticia extends Component{
    use WithPagination;
    use WithFileUploads;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';
    public $search='';

    public $collapsed="collapsed-card",$collapsedicon="fa-plus";
    public $foto;
    public $updateMode = false,$fila="id",$orden="desc";
    public $nombre, $noticias_id, $descripcion, $iva, $codigo,$slug,$fotoupdate;


    public function render(){

        $noticias = Noticias::where('estado',1)->where('nombre','LIKE','%'.$this->search.'%')->paginate(20);
        return view('livewire.noticia.index',["noticias"=>$noticias]);
    }

    public function store()
    {
        //$validatedData = $this->validate([
            // 'nombre' => ['required', 'unique:productos'],
            // 'slug' => ['required', 'unique:productos'],
        // ],
        // [
            // 'nombre.unique' => 'El nombre de producto ya está en uso',
            // 'slug.unique' => 'El enlace ya está en uso',
        // ]);
    
        $nombreFoto = '';
        if ($file = $this->foto) {
            $control = 0;
            $nombreFoto = rand() . "." . $file->getClientOriginalExtension();
            while ($control == 0) {
                if (is_file(public_path() . '/images/noticias/' . $nombreFoto)) {
                    $nombreFoto = rand() . $nombreFoto;
                } else {
                    Image::make($this->foto)
                        ->heighten(1000)
                        ->save(public_path() . '/images/noticias/' . $nombreFoto);
                    $control = 1;
                }
            }
        }
    
        $noticia = new Noticias;
        $noticia->nombre = $this->nombre;
        $noticia ->descripcion = $this->descripcion;
        $noticia ->slug = $this->slug;
        $noticia ->estado = 1;
        $noticia ->foto = $nombreFoto;
        $noticia ->save();
    
    
        $this->emit('alert', ['type' => 'success', 'message' => '¡Noticia agregado correctamente!']);
        $this->resetInputFields();
        $this->collapsed = "collapsed-card";
        $this->collapsedicon = "fa-plus";
    }

    public function delete($id)
    {
        if($id){
            $noticias = Noticias::find($id);
            $noticias->estado=0;
            $noticias->update();
            $this->emit('alert', ['type' => 'error', 'message' => 'noticias eliminado correctamente!']);
        }
    }



    private function resetInputFields(){
        $this->nombre = '';
        $this->descripcion = '';
        $this->foto = '';
        $this->collapsed="collapsed-card";
        $this->collapsedicon="fa-plus";
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
}
