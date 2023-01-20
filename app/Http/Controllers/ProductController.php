<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index()
    {
        return view('backend.admin.pages.product.table');
    }
    public function create()
    {
        return view('backend.admin.pages.product.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'images.*' => 'required',
            'desc' => 'required',
            'images' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'is_fertilizer' => 'required',
            'agricultureunit' => 'required',
        ]);
        $product = new Product();
        $product->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/product/images/', $imageName);
            $product->image = 'backend/product/images/' . $imageName;
        }
        $product->desc = $request->desc;
        $product->category_id = $request->category_id;
        if($request->discount == null)
        {
            $product->price = $request->price;
        }
        else
        {
            $product->discount = $request->discount;
            $product->price = $request->price - $request->discount;
        }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $img->getClientOriginalExtension();
                $img->move('backend/product/images/', $imageName);
                $imgs[] = $imageName;
                $product->images = json_encode($imgs);
            }
        }
        $product->category_id = $request->category_id;
        $product->is_fertilizer = $request->is_fertilizer;
        $product->agricultureunit = $request->agricultureunit;
        $product->auth_id = Auth::user()->id;
        $product->save();
        Alert::success('product saved', 'added successfully');
        return redirect()->back();
    }
    public function show(product $product)
    {
        //
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.admin.pages.product.edit',compact('product'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'category_id' => 'required',
            'price' => 'required',

            'is_fertilizer' => 'required',
            'agricultureunit' => 'required',
        ]);
        $product = Product::find($id);
        $product->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/product/images/', $imageName);
            $product->image = 'backend/product/images/' . $imageName;
        }
        $product->desc = $request->desc;
        $product->is_fertilizer = $request->is_fertilizer;
        $product->category_id = $request->category_id;
        if($request->discount == null)
        {
            $product->price = $request->price;
        }
        else
        {
            $product->discount = $request->discount;
            $product->price = $request->price - $request->discount;
        }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $img->getClientOriginalExtension();
                $img->move('backend/product/images/', $imageName);
                $imgs[] = $imageName;
                $product->images = json_encode($imgs);
            }
        }
        $product->category_id = $request->category_id;
        $product->agricultureunit = $request->agricultureunit;
        $product->auth_id = Auth::user()->id;
        $product->update();
        Alert::success('product updated', 'updated successfully');
        return redirect('/admin/dashboard/product/table');

    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Alert::error('product deleted', 'deleted successfully');
        return redirect()->back();

    }
}
