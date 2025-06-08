<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaComponent extends Component
{
    public $id_cat = null;
    public $nombre;
    public $detalle;

    protected $rules = [
        "nombre" => "required|min:3|max:50|unique:categorias,nombre"
    ];

    public function updated($nombre){

        $this->validateOnly($nombre);
    }

    public function guardarCategoria(){
        
        /*Categoria::create([
            "nombre" => $this->nombre,
            "detalle" => $this->detalle
        ]);*/
        if($this->id_cat != null){
            $cat= Categoria::find($this->id_cat);
            $cat->nombre = $this->nombre;
            $cat->detalle = $this->detalle;
            $cat->update();

            $this->id_cat = null;
        }else{
            $cat = new Categoria();
            $cat->nombre = $this->nombre;
            $cat->detalle = $this->detalle;
            $cat->save();
        }
        

        $this->nombre="";
        $this->detalle="";
    }

    public function editarCategoria($id){
        $this->id_cat = $id;
        $cate = Categoria::find($id);
        $this->nombre = $cate->nombre;
        $this->detalle = $cate->detalle;
    }

    public function render()    
    {
        $categorias = Categoria::orderBy('id', 'desc')->get();

        return view('livewire.categoria-component', ["categorias"=>$categorias])
                //->layout('layouts.theme.admin');
                // ->slot("contenedor");
                ->extends('layouts.theme.admin')
                ->section("contenedor");
    }
}
