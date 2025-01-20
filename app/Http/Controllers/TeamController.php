<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::latest()->paginate(5);
        return view('backend.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
        ]);
        $team = new Team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->facebook = $request->facebook ?? null;
        $team->instagram = $request->instagram ?? null;
        $team->twiter = $request->twiter ?? null;
        $team->linkedin = $request->linkedin ?? null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('teams', $filename, 'public');
            $team->image = 'teams/' . $filename;
        }
        $team->save();
        return redirect()->route('team.index')->with('success', 'Team created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $team = Team::find($id);
        return view('backend.team.edit',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->facebook = $request->facebook ?? null;
        $team->instagram = $request->instagram ?? null;
        $team->twiter = $request->twiter ?? null;
        $team->linkedin = $request->linkedin ?? null;
        if ($request->hasFile('image')) {
            // Delete old banner file if exists
            if ($team->image && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }
    
            // Upload new banner file
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('teams', $filename, 'public');
            $team->image = 'teams/' . $filename;
        }
       
    
        $team->save();
    
        return redirect()->route('team.index')->with('success', 'Team updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::find($id);

        // Check if the blog exists
        if (!$team) {
            return redirect()->back()->with('error', 'Team not found.');
        }

        // Delete the image from the 'public/blogs' folder if it exists
        if ($team->image && Storage::disk('public')->exists($team->image)) {
            Storage::disk('public')->delete($team->image);
        }

        // Delete the blog record from the database
        $team->delete();

        return redirect()->back()->with('success', 'Team has been deleted successfully.');
    }
}
