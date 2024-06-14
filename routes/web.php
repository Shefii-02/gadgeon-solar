<?php

use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    return 'done';
});
Route::get('/', function () {
    $title = "Home";
    return view('index',compact('title'));
});

Route::get('solutions', function () {
    $title = "Solutions";
    return view('solutions',compact('title'));
});

Route::get('services', function () {
    $title = "Services";
    return view('services',compact('title'));
});
Route::get('about-us', function () {
    $title = "About us";
    return view('about-us',compact('title'));
});


Route::get('contact-us', function () {
    $title = "Contact us";
    return view('contact-us',compact('title'));
});

// Route::get('partners', function () {
//     $title = "Partners";
//     return view('partners',compact('title'));
// });


Route::get('operation-and-maintenance-services', function () {
    $title = "Operation and Maintenance (O&M) Services";
    return view('operation-and-maintenance-services',compact('title'));
});

Route::get('residential-solar-solutions', function () {
    $title = "Residential Solar Solutions";
    return view('residential-solar-solutions',compact('title'));
});

Route::get('commercial-solar-solutions', function () {
    $title = "Commercial Solar Solutions";
    return view('commercial-solar-solutions',compact('title'));
});
Route::get('solar-project-development', function () {
    $title = "Solar Project Development";
    return view('solar-project-development',compact('title'));
});

Route::get('solar-maintenance-support', function () {
    $title = "Solar Maintenance & Support";
    return view('solar-maintenance-support',compact('title'));
});

Route::get('turnkey-solar-pv-services', function () {
    $title = "Our Turnkey Solar PV Services";
    return view('turnkey-solar-pv-services',compact('title'));
});
 
Route::get('operation-and-maintenance-service', function () {
    $title = "Operation and Maintenance (O&M) Services";
    return view('operation-and-maintenance-services',compact('title'));
});


Route::get('why-choose-gadgeon-solar', function () {
    $title = "Why Choose GadgEon Solar";
    return view('why-choose-gadgeon-solar',compact('title'));
});

Route::get('technology-partners', function () {
    $title = "Technology Partners";
    return view('technology-partners',compact('title'));
});














Route::post('contact-us', 'App\Http\Controllers\PostSubmit@submitContactForm')->name('contact-email');
Route::post('quote', 'App\Http\Controllers\PostSubmit@submitQuoteForm')->name('quote-email');



