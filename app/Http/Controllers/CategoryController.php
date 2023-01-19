<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.admin.pages.category.table');
    }


    public function store(Request $request)
    {
        $category = new Category();
        $category->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/category/images/', $imageName);
            $category->image = 'backend/category/images/' . $imageName;
        }
        $category->save();
        Alert::success('category saved', 'added successfully');
        return redirect()->back();
    }
    public function show(Category $category)
    {
        //
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.admin.pages.category.edit',compact('category'));
    }
    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        $category->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/category/images/', $imageName);
            $category->image = 'backend/category/images/' . $imageName;
        }
        $category->update();
        Alert::success('category updated', 'updated successfully');
        return redirect('/admin/dashboard/category/table');

    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Alert::error('category deleted', 'deleted successfully');
        return redirect()->back();

    }
}
