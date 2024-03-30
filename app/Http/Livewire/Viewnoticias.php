<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Noticia;
use Livewire\WithPagination;

class Viewnoticias extends Component{
    use WithPagination;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';
    
    public $search='';

    public $limite;
    public function render(){
        $noticias = Noticia::where('estado', 1)->where('nombre', 'LIKE', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(20);
        return view('livewire.viewnoticias',["noticias" => $noticias]);
    }
}
