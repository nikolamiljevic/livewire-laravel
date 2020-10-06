<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Products extends Component
{

	public $orderProducts = [];
	public $allProducts = [];
	
    public function render()
    {

        return view('livewire.products');
    }
}
