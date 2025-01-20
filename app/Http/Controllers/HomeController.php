<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.index');
    }
    public function view(){
        $banner = Frontend::latest()->paginate(8);
        return view('backend.banner.index', compact('banner'));
    }
    public function create(){
        return view('backend.banner.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            
            'image' => 'required'
            

        ]);
       
        $banner = new Frontend();
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('banners', $filename, 'public');
            $banner->image = 'banners/' . $filename;
        }
       
        

        $banner->save();

        return redirect()->back()->with('success', 'banner uploaded successfully.');
    }
    public function show($id)
    {
        $banner = Frontend::find($id);
        return view('backend.banner.edit', compact('banner'));
        
    }

    public function update(Request $request, $id)
    {
        $banner = Frontend::findOrFail($id);
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        if ($request->hasFile('image')) {
            // Delete old banner file if exists
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
    
            // Upload new banner file
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('banners', $filename, 'public');
            $banner->image = 'banners/' . $filename;
        }
       
    
        $banner->save();
    
        return redirect()->route('banner.index')->with('success', 'banner updated successfully.');
    }

    public function destroy($id){
        $banner = Frontend::find($id);

        // Check if the blog exists
        if (!$banner) {
            return redirect()->back()->with('error', 'Banner not found.');
        }

        // Delete the image from the 'public/blogs' folder if it exists
        if ($banner->image && Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }

        // Delete the blog record from the database
        $banner->delete();

        return redirect()->back()->with('success', 'Banner has been deleted successfully.');
    }

}
