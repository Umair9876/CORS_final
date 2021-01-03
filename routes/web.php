<?php
use App\Category;
use App\Complaint;
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

Route::get('/citizen', function () {
    // return view('welcome');
    $categories = Category::all();
    $complaints = Complaint::all();

    return view('citizen',compact('categories','complaints'));
})->name('welcome')->middleware('auth');


Route::get('/', function () {
    return view('welcomeCopy');
})->name('main');

Route::get('/maps', function(){
    return view('map');
});

Route::post('/sendLocation', 'MapController@sendLocation')->name('send');
Route::get('/view/complaint', 'ComplaintController@registerComplaintView')->name('location');
Route::post('/register/complaint', 'ComplaintController@registerComplaint')->name('register');
Auth::routes();

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard')->middleware('auth');


Route::get('/firs', function () {
    return view('viewFirs');
})->name('firs')->middleware('auth');

Route::get('/cyberCrime', function () {
    return view('viewCyberCrimes');
})->name('cyberCrime')->middleware('auth');

Route::get('/antibullying', function () {
    return view('viewAntibullying');
})->name('antibullying')->middleware('auth');


Route::get('/appointments', function () {
    return view('viewAppointments');
})->name('appointments')->middleware('auth');


Route::get('/emergencyLocations', function () {
    $complaints = Complaint::all();
    return view('viewEmergencyLocations',compact('complaints'));

})->name('emergencyLocations')->middleware('auth');


 Route::get('/registerpolice', function () {
    return view('viewRegisterPolice');
})->name('registerpolice')->middleware('auth');

Route::get('/dashboard1', function () {
    return view('dashboard1');
})->name('dashboard1')->middleware('auth');
 


Route::get('/police/accept/location/{id}', function ($id) {
    $complaint = Complaint::find($id);
    $complaint->isAcceptLocation = 1;
    $complaint->save();
    return redirect()->back();
})->middleware('auth');

