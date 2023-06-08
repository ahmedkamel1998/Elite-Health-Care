<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\Admin\DoctorController as AdminDoctorController;
use App\Http\Controllers\Admin\HospitalController as AdminHospitalController;
use App\Http\Controllers\Admin\PharmaciesController as AdminPharmaciesController;
use App\Http\Controllers\Admin\PatientController as AdminPatientController;
use App\Http\Controllers\Admin\FollowUpController as AdminFollowUpController;

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

Route::get('/', function () {
    return view('body');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard',function(){
    return view('admin.index');
})->middleware('auth');


/*Doctors*/
// Route::resource('doctors', DoctorController::class);
Route::get('login_doctor' , [DoctorController::class , 'login']);
Route::get('signup_doctor' , [DoctorController::class , 'signup']);
Route::get('doctors' , [DoctorController::class , 'index'])->name('doctors');
Route::post('doctor/signup' , [DoctorController::class , 'store'])->name('sign');
Route::post('doctor/signin' , [DoctorController::class , 'signin'])->name('signin');
Route::post('logout' , [DoctorController::class , 'logout'])->name('logout');


/*Patient*/
Route::get('signup_patient' , [PatientController::class , 'signup']);
Route::get('login_patient' , [PatientController::class , 'login']);
Route::post('patient_signup' , [PatientController::class , 'store'])->name('patient_signup');
Route::post('patient_signin' , [PatientController::class , 'patient_signin'])->name('patient_signin');
Route::post('logout_patient' , [PatientController::class , 'logout_patient'])->name('logout_patient');

/*Hospital*/
Route::get('signup_hospital' , [HospitalController::class , 'signup']);
Route::get('login_hospital' , [HospitalController::class , 'login']);
Route::get('hospitals' , [HospitalController::class , 'index'])->name('hospitals');
Route::post('hospital_signup' , [HospitalController::class , 'store'])->name('hospital_signup');
Route::post('hospital_signin' , [HospitalController::class , 'hospital_signin'])->name('hospital_signin');
Route::post('logout_hospital' , [HospitalController::class , 'logout_hospital'])->name('logout_hospital');



/*Pharmacy*/
Route::get('signup_pharmacy' , [PharmacyController::class , 'signup']);
Route::get('login_pharmacy' , [PharmacyController::class , 'login']);
Route::get('pharmacy' , [PharmacyController::class , 'index'])->name('pharmacy');
Route::post('pharmacy_signup' , [PharmacyController::class , 'store'])->name('pharmacy_signup');
Route::post('pharmacy_signin' , [PharmacyController::class , 'pharmacy_signin'])->name('pharmacy_signin');
Route::post('logout_pharmacy' , [PharmacyController::class , 'logout_pharmacy'])->name('logout_pharmacy');


/*Follows*/
Route::get('follows' , [FollowController::class , 'index'])->name('follows');
Route::post('send_follows' , [FollowController::class , 'store'])->name('send_follow');

/*Admin*/

/*Admin of doctors*/
Route::get('admin_doctor' , [AdminDoctorController::class , 'index'])->name('admin_doctor');
// Route::get('edit_doctors' , [AdminDoctorController::class , 'edit'])->name('edit_doctors');
Route::get('/admin_doctors/{id}/edit', [AdminDoctorController::class , 'edit'])->name('doctor.edit');
Route::put('/admin_doctors/{id}/update', [AdminDoctorController::class , 'update'])->name('doctors.update');
Route::get('/doctors/create', [AdminDoctorController::class , 'create'])->name('doctors.create');
Route::post('/doctors/store', [AdminDoctorController::class , 'store'])->name('doctors.store');
Route::delete('/doctors_destroy/{id}', [AdminDoctorController::class , 'destroy'])->name('doctors.delete');


/*Admin of hospitals*/
Route::get('admin_hospital' , [AdminHospitalController::class , 'index'])->name('admin_hospital');
Route::get('/admin_hospital/{id}/edit', [AdminHospitalController::class , 'edit'])->name('hospital.edit');
Route::put('/admin_hospital/{id}/update', [AdminHospitalController::class , 'update'])->name('hospital.update');
Route::get('/hospita/create', [AdminHospitalController::class , 'create'])->name('hospital.create');
Route::post('/hospital/store', [AdminHospitalController::class , 'store'])->name('hospital.store');
Route::delete('/hospital_destroy/{id}', [AdminHospitalController::class , 'destroy'])->name('hospital.delete');


/*Admin of pharmacy*/
Route::get('admin_pharmacy' , [AdminPharmaciesController::class , 'index'])->name('admin_pharmacy');
Route::get('/admin_pharmacy/{id}/edit', [AdminPharmaciesController::class , 'edit'])->name('pharmacy.edit');
Route::put('/admin_pharmacy/{id}/update', [AdminPharmaciesController::class , 'update'])->name('pharmacy.update');
Route::get('pharmacy/create', [AdminPharmaciesController::class , 'create'])->name('pharmacy.create');
Route::post('/pharmacy/store', [AdminPharmaciesController::class , 'store'])->name('pharmacy.store');
Route::delete('/pharmacy_destroy/{id}', [AdminPharmaciesController::class , 'destroy'])->name('pharmacy.delete');


/*Admin of patient*/
Route::get('admin_patient' , [AdminPatientController::class , 'index'])->name('admin_patient');
Route::get('/admin_patient/{id}/edit', [AdminPatientController::class , 'edit'])->name('patient.edit');
Route::put('/admin_patient/{id}/update', [AdminPatientController::class , 'update'])->name('patient.update');
// Route::get('/patient/create', [AdminPatientController::class , 'create'])->name('patient.create');
// Route::post('/patient/store', [AdminPatientController::class , 'store'])->name('patient.store');
Route::delete('/patient_destroy/{id}', [AdminPatientController::class , 'destroy'])->name('patient.delete');


/*Admin of follow ups*/
Route::get('admin_follow' , [AdminFollowUpController::class , 'index'])->name('admin_follow');
Route::delete('/admin_destroy/{id}', [AdminFollowUpController::class , 'destroy'])->name('follow.delete');
Route::get('/admin_follow/{id}/edit', [AdminFollowUpController::class , 'edit'])->name('follow.edit');
Route::put('/admin_follow/{id}/update', [AdminFollowUpController::class , 'update'])->name('follow.update');

/*-------------------------------------*/


Route::get('/search',  [SearchController::class , 'search'])->name('search');
Route::get('/search2', [SearchController::class , 'search2'])->name('search2');
Route::get('/search3', [SearchController::class , 'search3'])->name('search3');

