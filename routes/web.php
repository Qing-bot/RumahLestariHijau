<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TableHomestayController;
use App\Http\Controllers\TableCulinaryController;

use App\Models\Homestay;
use App\Models\Culinary;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ViewController;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewController::class, 'index']);


// Route::get('/homestay', function () {
//     return view('homestay');
// });
Route::get('/login', function(){
    return view('login');
});

// Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', function () {
        return view('admin.home');
    });
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'registration']);
Route::post('/register', [AuthController::class, 'registerUser'])->name('register.custom');



// Homestay
Route::get('/tableHomestay', [ViewController::class, 'indexAdminHomestay'])->name('tableHomestay');

Route::get('/createHomestay', function(){
    return view('admin.createHomestay');
});
Route::post('/storeHomestay', [RegisterController::class, 'addHomestay'])->name('storehs');

Route::get('/editTableHomestay/{id}',[ViewController::class, 'indexAdminEditHomestay']);
Route::post('/editTableHomestay/{id}/edit',[RegisterController::class, 'editHomestay'])->name('ediths');

Route::delete('/deleteTableHomestay/{id}',[RegisterController::class, 'deleteHomestay'])->name('deletehs');
// ----------------------------------

// Culinary
Route::get('/tableCulinary',[ViewController::class, 'indexAdminCulinary'])->name('tableCulinary');

Route::get('/createCulinary', function(){
    return view('admin.createCulinary');
});
Route::post('/createCulinary/add', [RegisterController::class, 'addCulinary'])->name('storec');

Route::get('/editCulinary/{id}', [ViewController::class, 'indexAdminEditCulinary']);
Route::post('editCulinary/{id}/edit', [RegisterController::class, 'editCulinary'])->name('editc');

Route::delete('/deleteTableCulinary/{id}',[RegisterController::class, 'deleteCulinary'])->name('deletec');
// -----------------------------------

// Destination
Route::get('/tableDestination',[ViewController::class, 'indexAdminDestination'])->name('tableDestination');

Route::get('/createDestination', function(){
    return view('admin.createDestination');
});
Route::post('/createDestination/add', [RegisterController::class, 'addDestination'])->name('stored');

Route::get('/editDestination/{id}', [ViewController::class, 'indexAdminEditDestination']);
Route::post('editDestination/{id}/edit', [RegisterController::class, 'editDestination'])->name('editd');

Route::delete('/deleteTableDestination/{id}',[RegisterController::class, 'deleteDestination'])->name('deleted');
// -----------------------------------


// Souvenir
Route::get('/tableSouvenir',[ViewController::class, 'indexAdminSouvenir'])->name('tableSouvenir');

Route::get('/createSouvenir', function(){
    return view('admin.createSouvenir');
});
Route::post('/createSouvenir/add', [RegisterController::class, 'addSouvenir'])->name('stores');

Route::get('/editSouvenir/{id}', [ViewController::class, 'indexAdminEditSouvenir']);
Route::post('editSouvenir/{id}/edit', [RegisterController::class, 'editSouvenir'])->name('edits');

Route::delete('/deleteTableSouvenir/{id}',[RegisterController::class, 'deleteSouvenir'])->name('deletes');
// -----------------------------------

// Promo
Route::get('/tablePromo',[ViewController::class, 'indexAdminPromo'])->name('tablePromo');

Route::get('/createPromo', function(){
    return view('admin.createPromo');
});
Route::post('/createPromo/add', [RegisterController::class, 'addPromo'])->name('storep');

Route::get('/editPromo/{id}', [ViewController::class, 'indexAdminEditPromo']);
Route::post('editPromo/{id}/edit', [RegisterController::class, 'editPromo'])->name('editp');

Route::delete('/deleteTablePromo/{id}',[RegisterController::class, 'deletePromo'])->name('deletep');

// -----------------------------------
Route::get('/homestay', [ViewController::class, 'indexHomestay'])->name('homestay');
Route::get('/homestay/sort_by={id}', [ViewController::class, 'sortHomestay'])->name('homestay');
Route::get('/homestay/filter_by={id}', [ViewController::class, 'filterHomestayFacilities'])->name('homestay');
Route::get('/homestay/filter', [ViewController::class, 'filterHomestay'])->name('filter');

Route::get('/culinary', [ViewController::class, 'indexCulinary'])->name('culinary');
Route::get('/culinary/sort_by={id}', [ViewController::class, 'sortCulinary']);
Route::get('/culinary/filter', [ViewController::class, 'filterCulinary'])->name('filterc');

Route::get('/souvenir', [ViewController::class, 'indexSouvenir'])->name('souvenir');

Route::get('/promo', [ViewController::class, 'indexPromo'])->name('promo');

Route::get('/destination', [ViewController::class, 'indexDestination'])->name('destination');
Route::get('/destinationDetail/{id}', [ViewController::class, 'indexDestinationDetail'])->name('destinationDetail');

// Route::get('/promo', function(){
//     return view('promo');
// })->name('promo');

Route::get('/contactUs', [ContactUsController::class, 'index']
)->name('contactUs');


