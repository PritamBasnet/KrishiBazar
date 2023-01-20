<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductFilter extends Component
{
    public $product,$categoryFilter = [],$fromPrice,$toPrice;
    public $className = null;
    public function render()
    {
        $this->productShow();
        return view('livewire.product-filter');
    }
    public function productShow()
    {
        if($this->categoryFilter != null)
        {
            $this->product = Product::whereIn('category_id',$this->categoryFilter)->get();
        }
        // if($this->fromPrice != null && $this->toPrice != null)
        // {
        //     $this->product = Product::where('price','>=',$this->fromPrice)->where('price','<=',$this->toPrice)->get();
        // }
        // if($this->fromPrice == null && $this->toPrice != null)
        // {
        //     $this->product = Product::where('price','<=',$this->toPrice)->get();
        // }
        if($this->fromPrice != null)
        {  
            // $this->product = (int)$this->product;
            $this->product = Product::where('price','>',$this->fromPrice)->get();
        }
        if($this->categoryFilter == null && $this->fromPrice == null)
        {
            $this->product = Product::all();
        }
    }

    public function classActive()
    {
        if($this->className == null)
        {
            $this->className = "filterSidebarActive";
        }
        else
        {
            $this->className = null;
        }
        
    }
}
