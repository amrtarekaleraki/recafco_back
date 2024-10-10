<?php

use App\Http\Controllers\AccreditationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PartenerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialController;

// front routes

Route::group([
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    'as' => 'front.',
], function () {
    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/production', 'production')->name('production');
        Route::get('/construction', 'construction')->name('construction');
        Route::get('/projects', 'projects')->name('projects');
        Route::get('/contacts', 'contacts')->name('contacts');
        Route::post('/storecontact', 'storecontact')->name('storecontact');
        Route::get('/not-found', 'notfound')->name('notfound');
        Route::get('/notfoundPage', 'notfoundPage')->name('notfoundpage');
        // Route::get('/single-project', 'singleproject')->name('singleproject');
        Route::get('switch-language/{lang}', 'switchLanguage')->name('switch');
        Route::get('projects/{project}', 'SingleProject')->name('singleproject');
        Route::get('/search','search')->name('search');
        // single product pages
        Route::get('/precast/{product}', 'precast')->name('precast');
        Route::get('/hollowcore/{product}', 'hollowcore')->name('hollowcore');
        Route::get('/gfrc/{product}', 'gfrc')->name('gfrc');
        Route::get('/patching_plant/{product}', 'patching_plant')->name('patching_plant');


    });
});


/// admin routes

Route::name('admin.')->prefix('admin')->group(function(){

        Route::middleware('auth')->group(function(){
        // home page
        Route::view('/','admin.index')->name('index');

        // profile page
        Route::get('/profile',[AdminController::class,'index'])->name('profile');
        Route::post('/profile/update',[AdminController::class,'update'])->name('profile.update');

        // services page
        // Route::controller(ServiceController::class)->group(function(){
        //      Route::resource('services',ServiceController::class);
        // });

        // parteners page
        Route::controller(PartenerController::class)->group(function(){
            Route::resource('parteners',PartenerController::class);
        });

        // certificates page
        Route::controller(CertificateController::class)->group(function(){
            Route::resource('certificates',CertificateController::class);
        });

        // accreditations page
        Route::controller(AccreditationController::class)->group(function(){
            Route::resource('accreditations',AccreditationController::class);
        });

        // Home counters
        Route::controller(CounterController::class)->group(function(){
            Route::resource('counters',CounterController::class);
        });

        // socials
        Route::controller(SocialController::class)->group(function(){
            Route::resource('socials',SocialController::class);
        });

        // products
        Route::controller(ProductController::class)->group(function(){
            Route::resource('products',ProductController::class);
        });

        // contacts
        Route::controller(ContactController::class)->group(function(){
            Route::resource('contacts',ContactController::class);
        });

        // informations
        Route::controller(InformationController::class)->group(function(){
            Route::resource('informations',InformationController::class);
        });

        // categories
        Route::controller(CategoryController::class)->group(function(){
            Route::resource('categories',CategoryController::class);
        });

        // projects
        Route::controller(ProjectController::class)->group(function(){
            Route::resource('projects',ProjectController::class);
        });


        });

        require __DIR__.'/auth.php';


});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

