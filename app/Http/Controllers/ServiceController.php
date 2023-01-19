<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        return view('backend.admin.pages.service.table');
    }
    public function create()
    {
        return view('backend.admin.pages.service.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'desc' => 'required',
        ]);
        $service = new Service();
        $service->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/service/images/', $imageName);
            $service->image = 'backend/service/images/' . $imageName;
        }
        $service->desc = $request->desc;
        $service->save();
        Alert::success('service saved', 'added successfully');
        return redirect()->back();
    }
    public function show(service $service)
    {
        //
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.admin.pages.service.edit',compact('service'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);
        $service = Service::find($id);
        $service->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/service/images/', $imageName);
            $service->image = 'backend/service/images/' . $imageName;
        }
        $service->desc = $request->desc;
        $service->update();
        Alert::success('service updated', 'updated successfully');
        return redirect('/admin/dashboard/service/table');

    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        Alert::error('service deleted', 'deleted successfully');
        return redirect()->back();

    }
}
