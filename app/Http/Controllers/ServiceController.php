<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(4);
        return view('backend.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'servce_detail' => 'required',
            'image' => 'required|image',
           
              

        ]);
       
       
       
        $service = new Service();
        $service->service_name = $request->service_name;
        $service->servce_detail = $request->servce_detail;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('services', $filename, 'public');
            $service->image = 'services/' . $filename;
        }
      

        $service->save();

        return redirect()->back()->with('success', 'service uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->service_name = $request->service_name;
        $service->servce_detail = $request->servce_detail;
        if ($request->hasFile('image')) {
            // Delete old banner file if exists
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
    
            // Upload new banner file
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('services', $filename, 'public');
            $service->image = 'services/' . $filename;
        }
      
    
        $service->save();
    
        return redirect()->route('service.index')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        } 
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }
        $service->delete();
        return redirect()->back()->with('success', 'Service has been deleted successfully.');
    }
}

