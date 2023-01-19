<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    public function index()
    {
        return view('backend.admin.pages.location.table');
    }


    public function store(Request $request)
    {
        $location = new Location();
        $location->name = ucwords($request->name);
        $location->save();
        Alert::success('location saved', 'added successfully');
        return redirect()->back();
    }
    public function show(location $location)
    {
        //
    }
    public function edit($id)
    {
        $location = Location::find($id);
        return view('backend.admin.pages.location.edit',compact('location'));
    }
    public function update(Request $request,$id)
    {
        $location = Location::find($id);
        $location->name = ucwords($request->name);
        $location->update();
        Alert::success('location updated', 'updated successfully');
        return redirect('/admin/dashboard/location/table');

    }
    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();
        Alert::error('location deleted', 'deleted successfully');
        return redirect()->back();

    }
}
