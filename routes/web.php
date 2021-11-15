<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\base\HomeController::class,'index'])->name('home');



Route::get('/list/',[App\Http\Controllers\base\ListController::class,'index'])->name('list');

Route::get('/detail/{p}',[App\Http\Controllers\base\DetailController::class,'index'])->name('detail');

Route::get('/borrow/list/',[App\Http\Controllers\base\BorrowController::class,'list'])->name('borrow-list')->middleware('auth');

Route::middleware('guest')->name('auth.')->prefix('/auth')->group(function(){
    Route::get('/login',[App\Http\Controllers\auth\LoginController::class , 'index'])->name('login');
    Route::get('/register',[App\Http\Controllers\auth\RegisterController::class,'index'])->name('register');
    Route::post('/login',[App\Http\Controllers\auth\LoginController::class,'login_process'])->name('login_process');
    Route::post('/register',[App\Http\Controllers\auth\RegisterController::class,'register_process'])->name('register_process');
});
Route::get('/auth/logout',[App\Http\Controllers\auth\LogoutController::class,'index'])->name('auth.logout')->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::get('borrow/{p}/create',[App\Http\Controllers\base\BorrowController::class,'create'])->name('create');
    Route::get('borrow/{p}/soft_delete',[App\Http\Controllers\base\BorrowController::class,'soft_delete'])->name('soft_delete');
    Route::get('borrow/force_delete',[App\Http\Controllers\base\BorrowController::class,'force_delete'])->name('force_delete');
    Route::get('borrow/store',[App\Http\Controllers\base\BorrowController::class,'store'])->name('store');
    Route::get('borrow/{b}/remove',[App\Http\Controllers\base\BorrowController::class,'remove  '])->name('remove');
});

Route::middleware(['auth','admin','verified'])->name('admin.')->prefix('/admin/')->group(
    function(){
        Route::get('/', [App\Http\Controllers\admin\HomeController::class,'index'])->name('home');
        Route::get('/bookcategory/create/',[App\Http\Controllers\admin\BookCategoryController::class,'create'])->name('book_category.create');
        Route::get('/category/create/',[App\Http\Controllers\admin\CategoryController::class,'create'])->name('category.create');
        Route::get('/publisher/create/',[App\Http\Controllers\admin\PublisherController::class,'create'])->name('publisher.create');
        Route::get('/book/create/',[App\Http\Controllers\admin\BookController::class,'create'])->name('book.create');
        // endofcreate_ui links
        Route::post('/bookcategory/create/',[App\Http\Controllers\admin\BookCategoryController::class,'store'])->name('book_category.store');
        Route::post('/category/create/',[App\Http\Controllers\admin\CategoryController::class,'store'])->name('category.store');
        Route::post('/publisher/create/',[App\Http\Controllers\admin\PublisherController::class,'store'])->name('publisher.store');
        Route::post('/book/create/',[App\Http\Controllers\admin\BookController::class,'store'])->name('book.store');
        // end of store links
        Route::get('/bookcategory/',[App\Http\Controllers\admin\BookCategoryController::class,'index'])->name('book_category.list');
        Route::get('/category/',[App\Http\Controllers\admin\CategoryController::class,'index'])->name('category.list');
        Route::get('/publisher/',[App\Http\Controllers\admin\PublisherController::class,'index'])->name('publisher.list');
        Route::get('/book/',[App\Http\Controllers\admin\BookController::class,'index'])->name('book.list');
        // end of list link
        Route::get('/bookcategory/detail/{book_Category}',[App\Http\Controllers\admin\BookCategoryController::class,'detail'])->name('book_category.detail');
        Route::get('/category/detail/{category}',[App\Http\Controllers\admin\CategoryController::class,'detail'])->name('category.detail');
        Route::get('/publisher/detail/{publisher}',[App\Http\Controllers\admin\PublisherController::class,'detail'])->name('publisher.detail');
        Route::get('/book/detail/{pdf_Books}',[App\Http\Controllers\admin\BookController::class,'detail'])->name('book.detail');
        //end of detail link
        Route::post('/bookcategory/delete',[App\Http\Controllers\admin\BookCategoryController::class,'destroy'])->name('book_category.delete');
        Route::post('/category/delete',[App\Http\Controllers\admin\CategoryController::class,'destroy'])->name('category.delete');
        Route::post('/publisher/delete',[App\Http\Controllers\admin\PublisherController::class,'destroy'])->name('publisher.delete');
        Route::post('/book/delete',[App\Http\Controllers\admin\BookController::class,'destroy'])->name('book.delete');
        // end of delete link
        Route::get('/bookcategory/update/{book_Category}',[App\Http\Controllers\admin\BookCategoryController::class,'edit'])->name('book_category.edit');
        Route::get('/category/update/{category}',[App\Http\Controllers\admin\CategoryController::class,'edit'])->name('category.edit');
        Route::get('/publisher/update/{publisher}',[App\Http\Controllers\admin\PublisherController::class,'edit'])->name('publisher.edit');
        Route::get('/book/update/{pdf_Books}',[App\Http\Controllers\admin\BookController::class,'edit'])->name('book.edit');
        // end of update ui link.
        Route::post('/bookcategory/update/{book_Category}',[App\Http\Controllers\admin\BookCategoryController::class,'update'])->name('book_category.update');
        Route::post('/category/update/{category}',[App\Http\Controllers\admin\CategoryController::class,'update'])->name('category.update');
        Route::post('/publisher/update/{publisher}',[App\Http\Controllers\admin\PublisherController::class,'update'])->name('publisher.update');
        Route::post('/book/update/{pdf_Books}',[App\Http\Controllers\admin\BookController::class,'update'])->name('book.update');
        // end of edit link
        // Route::get('/user/ban/{user}',[App\Http\Controllers\admin\UserController::class,'ban_user'])->name('ban_user');
        Route::get('/user',[App\Http\Controllers\admin\UserController::class,'list'])->name('list_user');
    }
    
);