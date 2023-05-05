<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterJobSeekerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Employer\EmployerDashboardController;
use App\Http\Controllers\Employer\EmployerApplicationsController;
use App\Http\Controllers\Employer\EmployerChatController;
use App\Http\Controllers\Employer\EmployerSettingsController;
use App\Http\Controllers\Employer\EmployerProfileController;
use App\Http\Controllers\JobSeeker\JobseekerDashboardController;
use App\Http\Controllers\JobSeeker\JobseekerProfileController;
use App\Http\Controllers\JobSeeker\JobSeekerChatController;
use App\Http\Controllers\JobSeeker\JobSeekerSettingsController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', [App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutUs');
Route::get('/howItWorks', [App\Http\Controllers\HowItWorksController::class, 'index'])->name('howItWorks');

Auth::routes();

Route::middleware(['auth', 'jobseeker'])->group(function () {
    Route::get('/jobseeker/dashboard', [JobSeekerDashboardController::class, 'index'])->name('jobseeker.dashboard');
});

Route::middleware(['auth', 'employer'])->group(function () {
    Route::get('/employer/dashboard', [EmployerDashboardController::class, 'index'])->name('employer.dashboard');
});
// Jobseekers Routes
Route::get('/register/jobseeker', [RegisterJobSeekerController::class, 'showRegistrationForm'])->name('register.jobseeker');
Route::post('/register/jobseeker', [RegisterJobSeekerController::class, 'register'])->name('register.jobseeker.submit');

Route::get('/jobseeker/profile', 'JobSeeker\JobSeekerProfileController@index')->name('jobseeker.profile');
Route::get('/jobseeker/profile', [JobSeekerProfileController::class, 'index'])->name('jobseeker.profile');
Route::put('/jobseeker/profile', 'JobSeekerProfileController@update')->name('jobseeker.profile.update');


Route::get('/jobseeker/chat', 'JobSeeker\JobSeekerChatController@index')->name('jobseeker.chat');
Route::get('/jobseeker/chat', [JobSeekerChatController::class, 'index'])->name('jobseeker.chat');

Route::get('/jobseeker/settings', 'JobSeeker\JobSeekerSettingsController@index')->name('jobseeker.settings');
Route::get('/jobseeker/settings', [JobSeekerSettingsController::class, 'index'])->name('jobseeker.settings');

//Employers Routes
Route::get('/employer/profile', 'Employer\EmployerProfileController@index')->name('employer.profile');
Route::get('/employer/profile', [EmployerProfileController::class, 'index'])->name('employer.profile');

Route::get('/employer/chat', 'Employer\EmployerChatController@index')->name('employer.chat');
Route::get('/employer/chat', [EmployerChatController::class, 'index'])->name('employer.chat');

Route::get('/employer/settings', 'Employer\EmployerSettingsController@index')->name('employer.settings');
Route::get('/employer/settings', [EmployerSettingsController::class, 'index'])->name('employer.settings');

Route::get('/employer/applications', 'Employer\EmployerApplicationsController@index')->name('employer.applications');
Route::get('/employer/applications', [EmployerApplicationsController::class, 'index'])->name('employer.applications');



// Fallback route for any other request
Route::fallback(function () {
    return abort(404);
});
