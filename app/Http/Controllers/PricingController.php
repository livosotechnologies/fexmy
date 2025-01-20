<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Pricing::latest()->paginate(4);
        return view('backend.price.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $prices = Service::latest()->get();
        return view('backend.price.create', compact('prices'));
    }
   

public function getSubServices($serviceName)
{
    // Find the service and load its related sub-services (categories)
    $service = Service::where('service_name', $serviceName)->first();

    if ($service) {
        $subServices = $service->categories()->get(['sub_service_name']);
        return response()->json($subServices);
    } else {
        return response()->json(['message' => 'No sub-services found'], 404);
    }
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        
        $request->validate([
            'service_name' => 'required|string',
            'sub_service_name' => 'required|string',
            'service_type' => 'required|string',
            'price' => 'required|numeric',
            'points'=> 'required|array',
            'description' => 'required|string',
            'quotation' => 'required|mimes:pdf|max:2048',
        ]);

       
      
        if ($request->hasFile('quotation')) {
            $file = $request->file('quotation');
            
       
            $filename = uniqid() . '_' . $file->getClientOriginalName();
      
            $filePath = $file->storeAs('quotations', $filename, 'public');
            
     
            $price = new Pricing();
            $price->service_name = $request->input('service_name');
            $price->sub_service_name = $request->input('sub_service_name');
            $price->service_type = $request->input('service_type');
            $price->price = $request->input('price');
            $tagsString = $request->input('points')[0]; 
            $tagsArray = explode(',', $tagsString);
            $price->points = json_encode($tagsArray);
            $price->description = $request->input('description');
            $price->quotation = $filePath; 
            $price->save(); 
        }
    
  
        return redirect()->route('price.index')->with('success', 'Price created successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $price = Pricing::find($id);
        $price->points = json_decode($price->points, true);
        return view('backend.price.edit',compact('price'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pricing $pricing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $price = Pricing::findOrFail($id);
        $price->service_name = $request->input('service_name');
            $price->sub_service_name = $request->input('sub_service_name');
            $price->service_type = $request->input('service_type');
            $price->price = $request->input('price');
        if ($request->hasFile('quotation')) {
            // Delete old banner file if exists
            if ($price->quotation && Storage::disk('public')->exists($price->quotation)) {
                Storage::disk('public')->delete($price->quotation);
            }
    
            // Upload new banner file
            $file = $request->file('quotation');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('quotations', $filename, 'public');
            $price->quotation = 'quotations/' . $filename;
        }
        $tagsString = $request->input('points')[0]; 
        $tagsArray = explode(',', $tagsString);
        $price->points = json_encode($tagsArray);
        $price->description = $request->input('description');
        $price->save();
    
        return redirect()->route('price.index')->with('success', 'Price updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $price = Pricing::find($id);

        // Check if the blog exists
        if (!$price) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        // Delete the image from the 'public/blogs' folder if it exists
        if ($price->quotation && Storage::disk('public')->exists($price->quotation)) {
            Storage::disk('public')->delete($price->quotation);
        }

        // Delete the blog record from the database
        $price->delete();

        return redirect()->back()->with('success', 'price has been deleted successfully.');
    }
}
