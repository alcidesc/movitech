<?php

namespace App\Http\Livewire;
use App\Models\Noticia;


use Livewire\Component;

class Vernoticias extends Component{
    public $slug;
    public function render(){

        $noticia= Noticia::where('slug',$this->slug)->first();
        $noticias = Noticia::where('estado',1)->get();

        return view('livewire.frontend.vernoticias',["noticias"=>$noticias,"noticia"=>$noticia,]);
    }
}
