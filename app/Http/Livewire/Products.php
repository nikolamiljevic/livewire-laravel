<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{

	public $orderProducts = [];
    public $allProducts = [];
    
    public function mount() {
        $this->allProducts = Product::all();
        $this->orderProducts = [
            [
            'product_id'=> '',
            'quantity'=> 1
            ]
        ];
    }

    public function addProduct() {
        $this->orderProducts[] = ['product_id'=> '', 'quantity'=> 1];
    }

    public function removeProduct($index){
        unset($this->orderProducts[$index]);
    }
	
    public function render()
    {

        return view('livewire.products');
    }
}
