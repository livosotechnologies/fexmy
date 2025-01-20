<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(4);
        return view('backend.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            '$request' => 'title',
            '$request' => 'sub_title',
            '$request' => 'description',
            '$request' => 'image'
        ]);

        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->sub_title = $request->sub_title;
        $portfolio->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('portfolios', $filename, 'public');
            $portfolio->image = 'portfolios/' . $filename;
        }
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $portfolio = Portfolio::find($id);
        return view('backend.portfolio.edit', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->sub_title = $request->sub_title;
        $portfolio->description = $request->description;
        if ($request->hasFile('image')) {
            // Delete old banner file if exists
            if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }
    
            // Upload new banner file
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('portfolios', $filename, 'public');
            $portfolio->image = 'portfolios/' . $filename;
        }
       
    
        $portfolio->save();
    
        return redirect()->route('portfolio.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);

        // Check if the blog exists
        if (!$portfolio) {
            return redirect()->back()->with('error', 'Portfolio not found.');
        }

        // Delete the image from the 'public/blogs' folder if it exists
        if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
            Storage::disk('public')->delete($portfolio->image);
        }

        // Delete the blog record from the database
        $portfolio->delete();

        return redirect()->back()->with('success', 'Portfolio has been deleted successfully.');
    }
}
