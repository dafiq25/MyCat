<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\CategoryAdmController;
use App\Http\Controllers\productAdmController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;
use App\Http\Controllers\orderController;

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
    return redirect('/dashboard');
});

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::get('/regis', [regisController::class, 'index']);
Route::post('/register', [regisController::class, 'insertRegistrasi']);

Route::get('/dashboard', [productController::class, 'index']);
Route::get('/shop/{nama}', [productController::class, 'indexCategory']);
Route::get('/detail-item/{nama}', [productController::class, 'detailProduct']);

Route::get('/logout', [loginController::class, 'logout']);
Route::middleware(['auth', 'checkRole:user'])->group(function(){
    Route::get('/checkout/{nama}', [productController::class, 'checkout']);
    Route::post('/checkout/{id}', [productController::class, 'insertCheckout']);
    Route::get('/cart', [productController::class, 'history']);
    Route::get('/detail-cart/{id}', [productController::class, 'detailCart']);
    Route::post('/uploadBukti/{id}', [productController::class, 'uploadBukti']);
    Route::get('/selesai/{id}', [orderController::class, 'selesaiPesanan']);
    Route::get('/Profile', [productController::class, 'profile']);
    // Route::get('/Profile', function () {
    //     return view('Profile');
    // });

});


/////////////////////////ADMIN///////////////////////////
Route::middleware(['auth', 'checkRole:admin'])->group(function(){
    // Route::get('/DBadmin', function () {
    //     return view('admin.DBadmin');
    // });
    Route::get('/DBadmin', [orderController::class, 'indexAdm']);
    Route::resource('category', CategoryAdmController::class);
    Route::get('/listorder-new', [orderController::class, 'indexNew']);
    Route::get('/listorder-finished', [orderController::class, 'indexFinish']);
    Route::get('/detail-order/{id}', [orderController::class, 'detailOrder']);
    Route::post('/update-order/{id}', [orderController::class, 'updateOrder']);

    Route::get('/categoryadm', [CategoryAdmController::class, 'index']);
    Route::get('/createcategory', [CategoryAdmController::class, 'viewcreate']);
    Route::get('/categoryedit/{id}', [CategoryAdmController::class, "edit"]);
    Route::post('/category-delete/{id_category}', [CategoryAdmController::class, 'delete']);
    Route::post('/category_create', [CategoryAdmController::class, "store"]);
    Route::post('/category_update', [CategoryAdmController::class, "update"]);
    Route::get('/product-view/{id_category}', [productAdmController::class, 'index']);
    Route::get('/createproduct/{id}', [productAdmController::class, 'create']);
    Route::post('/insert-product/{id}', [productAdmController::class, 'insert']);
    Route::post('/product-delete/{id_category}/{id}', [productAdmController::class, 'delete']);
    Route::get('/product-edit/{id_product}/{id}', [productAdmController::class, 'indexUpdate']);
    Route::post('/update-product/{id}/{id_product}', [productAdmController::class, 'updateProduct']);
});

