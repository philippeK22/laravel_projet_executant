<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
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

Route::get('/',[FrontController::class,"home"])->name("home");

Route::get('/admin/dashboard',[FrontController::class,"admin"])->middleware(['auth'])->name('dashboard');

// Route::resource('/admin/users', UserController::class)->middleware(['auth']);

Route::get("/admin/users/main",[UserController::class,"index"])->middleware(['auth',"isAdmin"])->name("users.index");

Route::get("/admin/users/create",[UserController::class,"create"])->middleware(['auth',"isAdmin"])->name("users.create");

Route::post("/admin/users/store",[UserController::class,"store"])->middleware(['auth',"isAdmin"])->name("users.store");

Route::get('/admin/users/edit',[UserController::class,"edit"])->middleware(['auth',"isAdmin"])->name("users.edit");

Route::delete("/admin/users/{user}/destroy",[UserController::class,"destroy"])->middleware(['auth',"isAdmin"])->name("users.destroy");

Route::put("/admin/users/{user}/update",[UserController::class,"update"])->middleware(['auth',"isAdmin"])->name("users.update");

Route::put('admin/user/{user}/edit', [UserController::class, 'updateMembre'])->middleware('auth')->name('membre.update');

//Avatar
Route::resource("admin/avatar",AvatarController::class)->middleware(["auth","isAdmin"]);

// Cateories
Route::resource('/admin/categorie', CategorieController::class)->middleware(["auth","isAdmin"]);

// Images
Route::resource('/admin/image', ImageController::class)->middleware(["auth","isAdmin"]);

// Article Blog
Route::get('/admin/blog', [ArticleController::class, 'blog'])->middleware(["auth"])->name('blog.index');

//article
Route::resource('admin/article', ArticleController::class)->middleware('auth',"isAdmin");

// Gallerie
Route::get('/admin/gallerie', [ImageController::class, 'gallerie'])->name('gallerie.index');

Route::get('/admin/{image}/download', [ImageController::class, 'download'])->name('gallerie.download');

require __DIR__.'/auth.php';
