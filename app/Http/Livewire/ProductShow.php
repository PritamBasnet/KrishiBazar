<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductShow extends Component
{
    public $product;
    public function render()
    {
        $this->products();
        return view('livewire.product-show');
    }
    public function products()
    {
    $this->product =  Product::where('is_fertilizer','=',0)->get();
    }

    public function addToCart()
    {
        
    }
}
