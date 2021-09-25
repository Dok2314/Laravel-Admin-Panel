<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;

Route::get('/',[MainController::class,'index'])->name('home');


Route::name('user.')->group(function(){
    Route::view('/admin_panel','authenticate.admin')->middleware('auth')->name('admin');
    Route::get('/login',function(){
        if(Auth::check()){   
            return redirect(route('user.admin'));
        }
        return view('authenticate.login');
    })->name('login');
    Route::get('/registration',function(){
        if(Auth::check()){
            return redirect(route('user.admin'));
        }
        return view('authenticate.registration');
    })->name('registration');
    Route::get('/logout',function(Request $request){
        Auth::logout();
        $request->session()->forget('user');
        return redirect(route('home'));
    })->name('logout');
    Route::post('/login',[LoginController::class,'login']);
    Route::post('/registration',[RegistrationController::class,'registration']);
});

Route::get('/create/article/',[ArticleController::class,'articleView'])->name('article');
Route::post('/create/article/',[ArticleController::class,'articleCreate']);
Route::get('/all/artlicle/',[ArticleController::class,'getAllArticle'])->name('allArticle');
Route::get('/find/article/{id}',[ArticleController::class,'findArticle'])->name('oneArticle');
Route::post('/find/article/{id}',[ArticleController::class,'update'])->name('updateArticle');
Route::get('/delete/article/{id}',[ArticleController::class,'delete'])->name('deleteArticle');


Route::get('/create/category/',[CategoryController::class,'categoryView'])->name('create');
Route::post('/create/category/',[CategoryController::class,'create']);
Route::get('/all/category/',[CategoryController::class,'allCategory'])->name('all');
Route::get('/all/category/{id}',[CategoryController::class,'editCategory'])->name('category');
Route::post('/all/category/{id}',[CategoryController::class,'edit']);
Route::get('/delete/category/{id}',[CategoryController::class,'delete'])->name('delete');

Route::get('/create/good/',[GoodController::class,'createView'])->name('createGood');
Route::post('/create/good/',[GoodController::class,'create']);
Route::get('/add/goods/',[GoodController::class,'all'])->name('allGood');
Route::get('/find/good/{id}',[GoodController::class,'edit'])->name('editGood');
Route::post('/find/good/{id}',[GoodController::class,'update']);
Route::get('/delete/good/{id}',[GoodController::class,'delete'])->name('deleteGood');

Route::get('/store',[CartController::class,'index'])->name('indexView');
Route::get('/store/product/{id}',[CartController::class,'getProduct'])->name('getProduct');

Route::post('/add-to-cart',[CartController::class,'addToCart'])->name('addToCart');
