<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\FrontendController::class, 'service'])->name('service');
Route::get('/teams', [App\Http\Controllers\FrontendController::class, 'team'])->name('team');
Route::get('/portfolios', [App\Http\Controllers\FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/portfoliosdetail/{id}', [App\Http\Controllers\FrontendController::class, 'portfoliodetail'])->name('portfolios.detail');
Route::get('/blogs', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('/blogdetail/{id}', [App\Http\Controllers\FrontendController::class, 'blogdetail'])->name('blog.details');
Route::get('/servicedetail/{id}', [App\Http\Controllers\FrontendController::class, 'servicedetail'])->name('service.details');
Route::get('/contacts', [App\Http\Controllers\FrontendController::class, 'contacts'])->name('contacts');
Route::get('/subservicedetail/{id}', [App\Http\Controllers\FrontendController::class, 'subservicedetail'])->name('subservice.details');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('visa', function () {
    return view('frontend/visa');
});
Route::get('commonform', function () {
    return view('frontend/commonform');
});
Route::get('commonsection', function () {
    return view('frontend/commonsection');
});
Route::get('UAE-Mainland', function () {
    return view('frontend/UAE-Mainland');
});
Route::get('Dubai-mainland', function () {
    return view('frontend/Dubai-mainland');
});
Route::get('Abu-Dhabi-mainland', function () {
    return view('frontend/Abu-Dhabi-mainland');
});
Route::get('Ajman-mainland', function () {
    return view('frontend/Ajman-mainland');
});
Route::get('Sharjah-mainland', function () {
    return view('frontend/Sharjah-mainland');
});
Route::get('UAE-Freezone', function () {
    return view('frontend/UAE-Freezone');
});
Route::get('Dubai-Freezone', function () {
    return view('frontend/Dubai-Freezone');
});
Route::get('Abudhabi-Freezone', function () {
    return view('frontend/Abudhabi-Freezone');
});
Route::get('Ajman-Freezone', function () {
    return view('frontend/Ajman-Freezone');
});
Route::get('Sharjah-Freezone', function () {
    return view('frontend/Sharjah-Freezone');
});
Route::get('RAKEZ-Freezone', function () {
    return view('frontend/RAKEZ-Freezone');
});
Route::get('IFZA-Freezone', function () {
    return view('frontend/IFZA-Freezone');
});
Route::get('Ras-al-khaimah-Freezone', function () {
    return view('frontend/Ras-al-khaimah-Freezone');
});
Route::get('UAE-Offshore', function () {
    return view('frontend/UAE-Offshore');
});
Route::get('Dubai-Offshore', function () {
    return view('frontend/Dubai-Offshore');
});
Route::get('Sharjah-Offshore', function () {
    return view('frontend/Sharjah-Offshore');
});
Route::get('Jebel-ali-Offshore', function () {
    return view('frontend/Jebel-ali-Offshore');
});
Route::get('Ras-al-khaimah-Offshore', function () {
    return view('frontend/Ras-al-khaimah-Offshore');
});



//Banner
Route::get('/banner', [App\Http\Controllers\HomeController::class, 'view'])->name('banner.index');
Route::get('/createbanner', [App\Http\Controllers\HomeController::class, 'create'])->name('banner.create');
Route::post('/banner/store', [App\Http\Controllers\HomeController::class, 'store'])->name('banner.store');
Route::get('/banner/edit/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('banner.edit');
Route::post('/banner/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('banner.update');
Route::get('/banner/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('banner.delete');

//Blog
Route::get('/index', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\BlogController::class, 'create'])->name('create');
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('admin.blog.store');
Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.edit');
Route::post('/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
Route::get('blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.delete');

//Service
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
Route::get('/create/service', [App\Http\Controllers\ServiceController::class, 'create'])->name('service.create');
Route::post('/service/store', [App\Http\Controllers\ServiceController::class, 'store'])->name('admin.service.store');
Route::get('/service/edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
Route::post('/service/update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');
Route::get('service/delete/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.delete');

//sub-service
Route::get('/sub_service', [App\Http\Controllers\CategoryController::class, 'index'])->name('sub_service.index');
Route::get('/create/sub-service', [App\Http\Controllers\CategoryController::class, 'create'])->name('sub_service.create');
Route::post('/sub_service/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('admin.sub_service.store');
Route::get('/sub_service/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('sub_service.edit');
Route::post('/sub_service/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('sub_service.update');
Route::get('/sub_service/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('sub_service.delete');

//price
Route::get('/price', [App\Http\Controllers\PricingController::class, 'index'])->name('price.index');
Route::get('/create/price', [App\Http\Controllers\PricingController::class, 'create'])->name('price.create');
Route::get('/get-sub-services/{serviceName}', [App\Http\Controllers\PricingController::class, 'getSubServices'])->name('getSubServices');
Route::post('/price/store', [App\Http\Controllers\PricingController::class, 'store'])->name('admin.price.store');
Route::get('/price/edit/{id}', [App\Http\Controllers\PricingController::class, 'show'])->name('price.edit');
Route::post('/price/update/{id}', [App\Http\Controllers\PricingController::class, 'update'])->name('price.update');
Route::get('/price/delete/{id}', [App\Http\Controllers\PricingController::class, 'destroy'])->name('price.delete');

//testimonial
Route::get('/testi', [App\Http\Controllers\TestimonialController::class, 'index'])->name('testi.index');
Route::get('/testi/delete/{id}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testi.delete');
Route::post('/testimonial/store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('admin.testimonial.store');

//contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
Route::get('/contact/delete/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.delete');
Route::post('/contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('admin.contact.store');

//team
Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team.index');
Route::get('/create/team', [App\Http\Controllers\TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [App\Http\Controllers\TeamController::class, 'store'])->name('admin.team.store');
Route::get('/team/edit/{id}', [App\Http\Controllers\TeamController::class, 'show'])->name('team.edit');
Route::post('/team/update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('team.update');
Route::get('/team/delete/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('team.delete');

//portfolio
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/create/portfolio', [App\Http\Controllers\PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/portfolio/store', [App\Http\Controllers\PortfolioController::class, 'store'])->name('admin.portfolio.store');
Route::get('/portfolio/edit/{id}', [App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.edit');
Route::post('/portfolio/update/{id}', [App\Http\Controllers\PortfolioController::class, 'update'])->name('portfolio.update');
Route::get('/portfolio/delete/{id}', [App\Http\Controllers\PortfolioController::class, 'destroy'])->name('portfolio.delete');