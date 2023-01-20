<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Service;

class Frontend extends Controller
{
    //
    public function orderPage($id)
    {
        $product = Product::where('id','=',$id)->first();
        return view('frontend.checkout',compact('product'));
    }

    public function blogDetail($id)
    {
        $data =  Blog::where('id','=',$id)->first();
        return view('frontend.blogdetail',compact('data'));
    }
    public function serviceDetail($id)
    {
        $data =  Service::where('id','=',$id)->first();
        return view('frontend.blogdetail',compact('data'));
    }

    public function checkOut($id)
    {
        $product = Product::where('id','=',$id)->first();
        return view('frontend.checkout',compact('product'));
    }

    public function productDetail($id)
    {
        $product = Product::where('id','=',$id)->first();
        return view('frontend.productdetail',compact('product'));
    }
}
