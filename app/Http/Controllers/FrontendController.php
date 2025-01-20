<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Frontend;
use App\Models\Portfolio;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Frontend::latest()->get();
        $service = Service::latest()->take(4)->get();
        $team = Team::latest()->take(4)->get();
        $testimonials = Testimonial::latest()->take(2)->get();
        $blogs = Blog::latest()->take(3)->get();

        return view('frontend.index',compact('banner','service','team','testimonials','blogs'));
    }

    public function about(){
        $team = Team::latest()->take(4)->get();
        return view('frontend.about', compact('team'));
    }

    public function service(){
        $services = Service::latest()->paginate(6);
        return view('frontend.services', compact('services'));
    }

    public function team(){
        $teams = Team::latest()->paginate(6);
        return view('frontend.team', compact('teams'));
    }

    public function portfolio(){
        $ports = Portfolio::latest()->paginate(6);
        return view('frontend.portfolio', compact('ports'));
    }

    public function portfoliodetail($id){
        $port = Portfolio::find($id);
        return view('frontend.singleport',compact('port'));
    }

    public function blog(){
        $blogs = Blog::latest()->paginate(6);
        return view('frontend.blog', compact('blogs'));
    }

    public function blogdetail($id){
        $blogs = Blog::find($id);
        $sblog = Blog::latest()->take(5)->get();
        $blogs->tags = json_decode($blogs->tags, true);
        return view('frontend.singleblog', compact('blogs','sblog'));
    }
    public function contacts(){
        return view('frontend.contact');
    }

    public function servicedetail($id) {
        // Fetch the service by ID
        $services = Service::find($id);
    
        // If service not found, handle the error (optional)
        if (!$services) {
            return abort(404); // Redirect or return a 404 error
        }
    
        // Get the service name from the service instance
        $service_names = $services->service_name;
    
        // Fetch the associated subservices using the service name
        $subServices = Category::where('service_name', $service_names)->get();
    
        // Get all service names for the view (optional)
        $servicename = Service::all();
    
        // Return the view with the correct variables
        return view('frontend.servicedetail', compact('services', 'servicename', 'subServices'));
    }
    

    public function subservicedetail($id){
        $subservice = Category::find($id);
        $subservicenames = $subservice->service_name;
        $subservicename = Category::where('service_name', $subservicenames)->get();
        $pricings = $subservice->sub_service_name;
        $pricing = Pricing::where('sub_service_name', $pricings)->get();

        return view('frontend.pricing',compact('subservice','subservicename','pricing'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frontend $frontend)
    {
        //
    }
}
