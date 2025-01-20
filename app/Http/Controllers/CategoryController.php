<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_service = Category::latest()->paginate(4);
        return view('backend.sub_service.index', compact('sub_service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sub_service = Service::latest()->get();
        return view('backend.sub_service.create', compact('sub_service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'sub_service_name' => 'required',
            'service_description' => 'required',
            'image' => 'required|image',
        ]);
        $sub_service = new Category();
        $sub_service->service_name = $request->service_name;
        $sub_service->sub_service_name = $request->sub_service_name;
        $sub_service->service_description = $request->service_description;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('sub_services', $filename, 'public');
            $sub_service->image = 'sub_services/' . $filename;
        }
        $sub_service->save();
        return redirect()->back()->with('success', 'Sub-service submited successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sub_service = Service::latest()->get();
        $sub_service1 = Category::find($id);
        return view('backend.sub_service.edit', compact('sub_service1', 'sub_service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sub_service = Category::findOrFail($id);
        $sub_service->service_name = $request->service_name;
        $sub_service->sub_service_name = $request->sub_service_name;
        $sub_service->service_description = $request->service_description;

        if ($request->hasFile('image')) {
            if ($sub_service->image && Storage::disk('public')->exists($sub_service->image)) {
                Storage::disk('public')->delete($sub_service->image);
            }
    
            // Upload new banner file
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('sub_services', $filename, 'public');
            $sub_service->image = 'sub_services/' . $filename;
        }
      
    
        $sub_service->save();
    
        return redirect()->route('sub_service.index')->with('success', 'Sub-Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sub_service = Category::find($id);
        if (!$sub_service) {
            return redirect()->back()->with('error', 'Sub Service not found.');
        } 
        if ($sub_service->image && Storage::disk('public')->exists($sub_service->image)) {
            Storage::disk('public')->delete($sub_service->image);
        }
        $sub_service->delete();
        return redirect()->back()->with('success', 'Sub Service has been deleted successfully.');
    }
}
