<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = Testimonial::latest()->paginate(8);
        return view('backend.testimonial.index', compact('testimonial'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'testimonial' => 'required',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testi = Testimonial::find($id);
        $testi->delete();
        return redirect()->route('testi.index');
    }
}
