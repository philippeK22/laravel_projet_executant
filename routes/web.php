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

Route::get("/admin/users/create",[UserController::class,"create"])->name("users.create");

Route::post("/admin/users/store",[UserController::class,"store"])->name("users.store");

Route::get('/admin/users/edit',[UserController::class,"edit"])->name("users.edit");

Route::delete("/admin/users/{user}/destroy",[UserController::class,"destroy"])->name("users.destroy");

Route::put("/admin/users/{user}/update",[UserController::class,"update"])->name("users.update");

Route::put('admin/user/{user}/edit', [UserController::class, 'updateMembre'])->name('membre.update');

Route::resource("admin/avatar",AvatarController::class)->middleware(["auth","isAdmin"]);

Route::resource('/admin/categorie', CategorieController::class)->middleware(["auth","isAdmin"]);

Route::resource('/admin/image', ImageController::class)->middleware(["auth","isAdmin"]);

Route::get('/admin/blog', [ArticleController::class, 'blog'])->name('blog.index');

Route::resource('admin/article', ArticleController::class);
require __DIR__.'/auth.php';
