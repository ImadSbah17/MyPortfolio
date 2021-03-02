<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CarousselController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use App\Models\Presentation;
use App\Models\Project;
use App\Models\About;
use App\Models\Caroussel;
use App\Models\Skill;
use App\Models\Contact;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $datas = Presentation::all();
    $project = Project::all();
    $about= About::all();
    $caroussel= Caroussel::all();
    $skills= Skill::all();
    $contact= Contact::all();



    return view('template.template',compact('datas','project','about','caroussel','skills','contact'));
});


Route::post('/Mail-Sender',[MailController::class,'store'])->middleware('auth');

// mes routes pour ma presentation
Route::resource('project', PresentationController::class)->middleware('auth');

// mes routes pour mes project
Route::resource('projectvrai', ProjectController::class)->middleware('auth');

// mes routes pour about
Route::resource('about',AboutController::class)->middleware('auth');

// mes routes pr caroussel
Route::resource('caroussel',CarousselController::class)->middleware('auth');
// mes routes pr skills
Route::resource('skills',SkillController::class)->middleware('auth');

// mes routes pr contacts
Route::resource('contact',ContactController::class)->middleware('auth');

Route::resource('testimonial',TestimonialController::class)->middleware('auth');








Auth::routes();


 


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
