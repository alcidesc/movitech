<?php

namespace App\Http\Livewire;
use App\Models\Noticias;


use Livewire\Component;

class Vernoticias extends Component{
    public $slug;
    public function render(){

        $noticia= Noticias::where('slug',$this->slug)->first();
        $noticias = Noticias::where('estado',1)->get();

        return view('livewire.frontend.vernoticias',["noticias"=>$noticias,"noticia"=>$noticia,]);
    }
}
