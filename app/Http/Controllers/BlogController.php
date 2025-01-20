<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::latest()->paginate(5);
        return view('backend.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'date' => 'required|date',
            'tags' => 'required|array', 
              

        ]);
       
    
       
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('blogs', $filename, 'public');
            $blog->image = 'blogs/' . $filename;
        }
        $blog->date = $request->date;
        $tagsString = $request->input('tags')[0]; 
        $tagsArray = explode(',', $tagsString);
        $blog->tags = json_encode($tagsArray);

        $blog->save();

        return redirect()->back()->with('success', 'Blog uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        $blog->tags = json_decode($blog->tags, true);
       
        return view('backend.blog.edit', compact('blog'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        if ($request->hasFile('image')) {
            // Delete old banner file if exists
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
    
            // Upload new banner file
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('blogs', $filename, 'public');
            $blog->image = 'blogs/' . $filename;
        }
        $blog->date = $request->date;
        $tagsString = $request->input('tags')[0]; 
        $tagsArray = explode(',', $tagsString);
        $blog->tags = json_encode($tagsArray);
    
        $blog->save();
    
        return redirect()->route('index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
            $blog = Blog::find($id);

        // Check if the blog exists
        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        // Delete the image from the 'public/blogs' folder if it exists
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        // Delete the blog record from the database
        $blog->delete();

        return redirect()->back()->with('success', 'Blog has been deleted successfully.');
    }

}
