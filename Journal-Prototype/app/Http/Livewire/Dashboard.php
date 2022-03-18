<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $query_price;

    public function render()
    {
        return view('livewire.dashboard' , ['query_price'=> $this->query_price]); 
    }
    public function store() {
        dd("here");
    }  
    public function try(){
        dd("here");
    }
}
