<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        return view('backend.admin.pages.blog.table');
    }
    public function create()
    {
        return view('backend.admin.pages.blog.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'desc' => 'required',
        ]);
        $blog = new Blog();
        $blog->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/blog/images/', $imageName);
            $blog->image = 'backend/blog/images/' . $imageName;
        }
        $blog->desc = $request->desc;
        $blog->save();
        Alert::success('blog saved', 'added successfully');
        return redirect()->back();
    }
    public function show(blog $blog)
    {
        //
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.admin.pages.blog.edit',compact('blog'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);
        $blog = Blog::find($id);
        $blog->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/blog/images/', $imageName);
            $blog->image = 'backend/blog/images/' . $imageName;
        }
        $blog->desc = $request->desc;
        $blog->update();
        Alert::success('blog updated', 'updated successfully');
        return redirect('/admin/dashboard/blog/table');

    }
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        Alert::error('blog deleted', 'deleted successfully');
        return redirect()->back();

    }
}
