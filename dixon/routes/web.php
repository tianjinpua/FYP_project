<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ScoreHaController;
use App\Http\Controllers\ScoreNoController;
use App\Http\Controllers\CategoryController;


  
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
    return view('welcome');
});

  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/addProduct', function () {
        return view('addProduct2',['category' => App\Models\category::all()]);
    });

    Route::post('/addProduct/store',
    [App\Http\Controllers\ProductController::class,'add'])->name('addProduct');

    Route::get('/forumPage/{id}',
    [App\Http\Controllers\ProductController::class,'printCategoryProduct'])->name('printCategoryProduct');

    Route::get('/forumPage',
    [App\Http\Controllers\ProductController::class,'view'])->name('showProduct');

});
//Game Test
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/gameTest', [ScoreController::class, 'viewGameTest'])->name('gameTest');
    Route::get('/gameTestEz', [ScoreController::class, 'gameTestEz'])->name('gameTestEz');
    Route::post('/gameTestEz', [ScoreController::class, 'store']);    
    Route::get('/gameTestEz', [ScoreController::class, 'index']);

    Route::get('/gameTestNo', [ScoreNoController::class, 'gameTestNo'])->name('gameTestNo');
    Route::post('/gameTestNo', [ScoreNoController::class, 'store']);    
    Route::get('/gameTestNo', [ScoreNoController::class, 'index']);
   
    
    Route::get('/gameTestHa', [ScoreHaController::class, 'gameTestHa'])->name('gameTestHa');
    Route::post('/gameTestHa', [ScoreHaController::class, 'store']);    
    Route::get('/gameTestHa', [ScoreHaController::class, 'index']);
   
//forum

});

  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/manageForum', [HomeController::class, 'adminManageForum'])->name('manageForum');
    Route::resource("/admin/users",UserController::class);
    Route::get('admin/addCategory', function () {
        return view('addCategory');
    });
    Route::post('admin/addCategory',
    [App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');
    Route::get('/admin/addCategory', [CategoryController::class, 'index'])->name('addCategory');
    Route::get('/approveProduct', function () {
        return view('approveProduct',['products' => App\Models\product::all()]);
    });
    
    Route::get('admin/approvePage', function () {
        return view('approvePage');
    });

    Route::get('admin/approvePage',
    [App\Http\Controllers\ProductController::class,'approvePage'])->name('approvePage');
    
    Route::get('admin/approvePage/{id}',
    [App\Http\Controllers\ProductController::class,'approve'])->name('approveProduct');    
    
    Route::get('admin/declinePage/{id}',
    [App\Http\Controllers\ProductController::class,'decline'])->name('declineProduct');
    
    Route::get('/viewApprove',
    [App\Http\Controllers\ProductController::class,'viewApprove'])->name('viewApprove');

    Route::get('/admin/showEz', [ScoreController::class, 'adminIndex'])->name('showEz');
    Route::get('/admin/showNo', [ScoreNoController::class, 'adminIndex'])->name('showNo');
    Route::get('/admin/showHa', [ScoreHaController::class, 'adminIndex'])->name('showHa');

});
    

  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
