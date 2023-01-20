<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Frontend extends Controller
{
    //
    public function orderPage($id)
    {
        $product = Product::where('id','=',$id)->first();
        return view('frontend.checkout',compact('product'));
    }
}
