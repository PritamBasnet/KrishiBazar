<?php

namespace App\Http\Controllers;

use App\Models\agricultureunit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class AgricultureunitController extends Controller
{
    public function index()
    {
        return view('backend.admin.pages.agricultureunit.table');
    }


    public function store(Request $request)
    {
        $agricultureunit = new agricultureunit();
        $agricultureunit->name = ucwords($request->name);
        $agricultureunit->save();
        Alert::success('agricultureunit saved', 'added successfully');
        return redirect()->back();
    }
    public function show(agricultureunit $agricultureunit)
    {
        //
    }
    public function edit($id)
    {
        $agricultureunit = agricultureunit::find($id);
        return view('backend.admin.pages.agricultureunit.edit',compact('agricultureunit'));
    }
    public function update(Request $request,$id)
    {
        $agricultureunit = agricultureunit::find($id);
        $agricultureunit->name = ucwords($request->name);
        $agricultureunit->update();
        Alert::success('agricultureunit updated', 'updated successfully');
        return redirect('/admin/dashboard/agricultureunit/table');

    }
    public function destroy($id)
    {
        $agricultureunit = agricultureunit::find($id);
        $agricultureunit->delete();
        Alert::error('agricultureunit deleted', 'deleted successfully');
        return redirect()->back();

    }
}
