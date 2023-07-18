<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\ForntController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConsultationCOntroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ChamberController;
use App\Http\Controllers\admin\AdminController;

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


Route::controller(ForntController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/about-us','aboutUs')->name('aboutUs');
    Route::get('/services','services')->name('services');
    Route::get('/service-details/{id}','serviceDetails')->name('serviceDetails');
    Route::get('/blog','blog')->name('blog');
    Route::get('/blog-details-more/{id}','FrontBlogDetails')->name('frontBlogDetails');
    Route::get('/contact','contact')->name('contact');
    Route::get('/chamber','chamber')->name('chamber');
});
Route::controller(AdminController::class)->group(function(){
    Route::get('/adminLogin','adminIndex')->name('adminIndex');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/slider','slider')->name('slider');
    Route::put('/updateSlider/{id}','updateSlider')->name('updateSlider');
    Route::get('/top-section','topSection')->name('topSection');
    Route::post('/addTop','addTop')->name('addTop');
    Route::get('/editTop/{id}','editTop')->name('editTop');
    Route::put('/updateTop/{id}','updateTop')->name('updateTop');
    Route::delete('/deleteTop/{id}','deleteTop')->name('deleteTop');
    Route::get('/top-section-Two','topTwo')->name('topTwo');
    Route::put('/updateTopTwo/{id}','updateTopTwo')->name('updateTopTwo');
});
Route::controller(ContactController::class)->middleware('auth')->group(function(){
    Route::get('/contact-page','contactPage')->name('contactPage');
    Route::put('/updateContact/{id}','updateContact')->name('updateContact');
  
});
Route::resource('images',ImageController::class)->names('images')->middleware('auth');
Route::resource('project',ProjectController::class)->names('project')->middleware('auth');
Route::resource('testimonial',TestimonialController::class)->names('testimonial')->middleware('auth');
Route::resource('team',TeamController::class)->names('team')->middleware('auth');
Route::resource('blogs',BlogController::class)->names('blogs')->middleware('auth');
Route::resource('consultation',ConsultationCOntroller::class)->names('consultation')->middleware('auth');
Route::resource('chambers',ChamberController::class)->names('chambers')->middleware('auth');
Route::get('/blog-category', [App\Http\Controllers\BlogController::class, 'blogCategory'])->name('blogCategory')->middleware('auth');
Route::post('/blog-category-add', [App\Http\Controllers\BlogController::class, 'addCategory'])->name('addCategory')->middleware('auth');
Route::get('/blog-category-edit/{id}', [App\Http\Controllers\BlogController::class, 'editCategory'])->name('editCategory')->middleware('auth');
Route::put('/blog-category-update/{id}', [App\Http\Controllers\BlogController::class, 'updateCategory'])->name('updateCategory')->middleware('auth');
Route::delete('/blog-category-delete/{id}', [App\Http\Controllers\BlogController::class, 'deleteCategory'])->name('deleteCategory')->middleware('auth');
Route::get('/projectDetails/{id}', [App\Http\Controllers\ProjectController::class, 'projectDetails'])->name('projectDetails')->middleware('auth');
Route::post('/updateProjectDetails', [App\Http\Controllers\ProjectController::class, 'updateProjectDetails'])->name('updateProjectDetails')->middleware('auth');
Route::post('/listAdd', [App\Http\Controllers\ProjectController::class, 'listAdd'])->name('listAdd')->middleware('auth');
Route::get('/listEdit/{id}', [App\Http\Controllers\ProjectController::class, 'listEdit'])->name('listEdit')->middleware('auth');
Route::put('/updateList/{id}', [App\Http\Controllers\ProjectController::class, 'updateList'])->name('updateList')->middleware('auth');
Route::delete('/deleteList/{id}', [App\Http\Controllers\ProjectController::class, 'deleteList'])->name('deleteList')->middleware('auth');
Route::controller(ConsultationCOntroller::class)->middleware('auth')->group(function(){
  Route::get('/consultation-image','consultationImage')->name('consultationImage');
  Route::put('/consultation-image-update/{id}','consultationImageUpdate')->name('consultationImageUpdate');
  Route::get('/consultation-popup','consultationPopup')->name('consultationPopup');
  Route::post('/consultation-popup-add','consultationPopupAdd')->name('consultationPopupAdd');
  Route::get('/consultation-popup-edit/{id}','consultationPopupEdit')->name('consultationPopupEdit');
  Route::put('/consultation-popup-update/{id}','consultationPopupUpdate')->name('consultationPopupUpdate');
});
Route::controller(AboutController::class)->middleware('auth')->group(function(){
  Route::get('/about-us-section','aboutUst')->name('aboutUst');
  Route::put('/updateAbout/{id}','updateAbout')->name('updateAbout');
  Route::get('/about-section-two','aboutSectionTwo')->name('aboutSectionTwo');
  Route::put('/updateAboutSectionTwo/{id}','updateAboutSectionTwo')->name('updateAboutSectionTwo');
 
});
Route::controller(BlogController::class)->middleware('auth')->group(function(){
  Route::get('/blog-details/{id}','blogDetails')->name('blogDetails');
  Route::post('/updateBlogDetails','updateBlogDetails')->name('updateBlogDetails');
  Route::post('/addQa','addQa')->name('addQa');
  Route::get('/qnaEdit/{id}','qnaEdit')->name('qnaEdit');
  Route::put('/updateQa/{id}','updateQa')->name('updateQa');
  Route::delete('/qnaDelete/{id}','qnaDelete')->name('qnaDelete');
  Route::post('/addSection','addSection')->name('addSection');
  Route::get('/sectionEdit/{id}','sectionEdit')->name('sectionEdit');
  Route::put('/updateSection/{id}','updateSection')->name('updateSection');
  Route::delete('/sectionDelete/{id}','sectionDelete')->name('sectionDelete');
 
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
