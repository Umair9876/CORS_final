<?php
use App\Category;
use App\Complaint;
use App\Fir;
use App\Cybercrime;
use App\Antibullying;
use App\Appointment;
use App\Registerpolice;
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
    $firs = Fir::all();
    $cybers = Cybercrime::all();
    $antis = Antibullying::all();
    $appointments = Appointment::all();
    return view('citizen',compact('categories','complaints','firs','cybers','antis','appointments'));
})->name('welcome')->middleware('auth');


// Route::get('/citizen', function () {
//     // return view('welcome');
//     $categories = Category::all();
//     $complaints = Complaint::all();


//     return view('citizen',compact('categories','complaints'));
// })->name('welcome')->middleware('auth');


Route::get('/', function () {
    return view('welcomeCopy');
})->name('main');

Route::get('/maps', function(){
    return view('map');
});

Route::post('/sendLocation', 'MapController@sendLocation')->name('send');
Route::get('/view/complaint', 'ComplaintController@registerComplaintView')->name('location');
Route::post('/register/complaint', 'ComplaintController@registerComplaint')->name('register');
Route::post('/register/fir', 'ComplaintController@registerFir')->name('register-fir');

Route::post('/register/cyber', 'ComplaintController@registerCyber')->name('register-cyber');
Route::post('/register/anti', 'ComplaintController@registerAnti')->name('register-anti');
Route::post('/register/appointment', 'ComplaintController@registerAppointment')->name('register-appointment');

Route::post('/register/police', 'ComplaintController@policeregComplaint')->name('register-police');
Auth::routes();

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard')->middleware('auth');

Route::get('/registerpolice', function () {
    return view('viewRegisterPolice');
})->name('registerpolice')->middleware('auth');




Route::get('/firs', function () {
    $firs = Fir::all();
    return view('viewFirs',compact('firs'));
})->name('firs')->middleware('auth');

Route::get('/cyberCrime', function () {
    $cybers = Cybercrime::all();
    return view('viewCyberCrimes',compact('cybers'));
})->name('cyberCrime')->middleware('auth');

Route::get('/antibullying', function () {
    $firs = Antibullying::all();
    return view('viewAntibullying',compact('firs'));
})->name('antibullying')->middleware('auth');


Route::get('/appointments', function () {
    $firs = Appointment::all();
    return view('viewAppointments',compact('firs'));
})->name('appointments')->middleware('auth');


Route::get('/emergencyLocations', function () {
    $complaints = Complaint::all();
    return view('viewEmergencyLocations',compact('complaints'));

})->name('emergencyLocations')->middleware('auth');





Route::get('/dashboard1', function () {
    return view('dashboard1');
})->name('dashboard1')->middleware('auth');
 

Route::get('/police/accept/location/{id}', function ($id) {
    $complaint = Complaint::find($id);
    $complaint->isAcceptLocation = 1;
    $complaint->save();
    return redirect()->back();
})->middleware('auth');



Route::get('/police/accept/location/{id}', function ($id) {
    $complaint = Fir::find($id);
    $complaint->isAcceptLocation = 1;
    $complaint->save();
    return redirect()->back();
})->middleware('auth');


Route::get('/police/accept/location/{id}', function ($id) {
    $complaint = Cybercrime::find($id);
    $complaint->isAcceptLocation = 1;
    $complaint->save();
    return redirect()->back();
})->middleware('auth');


Route::get('/police/accept/location/{id}', function ($id) {
    $complaint = Antibullying::find($id);
    $complaint->isAcceptLocation = 1;
    $complaint->save();
    return redirect()->back();
})->middleware('auth');




Route::get('/police/accept/location/{id}', function ($id) {
    $complaint = Appointment::find($id);
    $complaint->isAcceptLocation = 1;
    $complaint->save();
    return redirect()->back();
})->middleware('auth');