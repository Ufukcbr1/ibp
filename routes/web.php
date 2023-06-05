<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Veri güncelleme ve yaratma: Route::post yöntemi, veritabanında yeni kayıtlar oluşturmak veya mevcut kayıtları güncellemek için kullanılabilir

*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('layouts.home') ;
});
Route::get('/profile.html', function () {
    return view('others.profile');
});

Route::get('/index.html', function () {
    return view('layouts.home');
});


Route::get('/details.html', function () {
    return view('others.details');

});

/*Route::get('/admin',[App\Http\Controllers\Admin\AdminController::class,'index'] );*/


Route::view('/loginadmin', '/others/admin-index.login-admin')->name('login_admin');
Route::view('/loginuser','/others/users.user_login')->name('user_login');
Route::view('/registeruser','/others/users.register_user')->name('register_user');
Route::get('/logoutuser',[\App\Http\Controllers\AdminUserController::class,'logout'])->name('logout_user');



Route::post('/loginadmincheck', [App\Http\Controllers\Admin\AdminController::class, 'loginadmincheck'])->name('loginadmincheck');





Route::get('/show/{$id}', [App\Http\Controllers\Admin\AdminController::class,'show'])->name('show');

Route::post('/addrole/{$id}', [App\Http\Controllers\Admin\AdminController::class,'addrole'])->name('addrole');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/games', [App\Http\Controllers\Admin\GameController::class, 'list'])->name('game_list');

Route::middleware('auth')->prefix('home')->group(function () {


    Route::get('contactus', [App\Http\Controllers\Admin\HomeController::class,'contact'])->name('contact_us');
    Route::post('sendmessage', [App\Http\Controllers\Admin\HomeController::class,'sendmessage'])->name('sendmessage');
    Route::get('/announcements', [App\Http\Controllers\Admin\AnnouncementController::class, 'list'])->name('announcements_list');

});
















Route::middleware('admin')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin_home');
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


    Route::prefix('messages')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\MesssageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\MesssageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\MesssageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\MesssageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [App\Http\Controllers\Admin\MesssageController::class, 'show'])->name('admin_message_show');
    });


    Route::get('/announcements', [App\Http\Controllers\Admin\AnnouncementController::class, 'index'])->name('admin_announcements');

    Route::get('/announcement/add', [App\Http\Controllers\Admin\AnnouncementController::class, 'add'])->name('announcement_add');
    Route::post('/announcement/create', [App\Http\Controllers\Admin\AnnouncementController::class, 'create'])->name('announcement_create');
    Route::get('/announcement/{id}', [App\Http\Controllers\Admin\AnnouncementController::class, 'show'])->name('announcement_show');
    Route::get('/announcement/{id}/edit', [App\Http\Controllers\Admin\AnnouncementController::class, 'edit'])->name('announcement_edit');


    Route::prefix('games')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\GameController::class, 'index'])->name('admin_game');
        Route::get('create', [App\Http\Controllers\Admin\GameController::class, 'create'])->name('admin_game_add');
        Route::post('store', [App\Http\Controllers\Admin\GameController::class, 'store'])->name('admin_game_store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\GameController::class, 'edit'])->name('admin_game_edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\GameController::class, 'update'])->name('admin_game_update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\GameController::class, 'destroy'])->name('admin_game_delete');
        Route::get('show', [App\Http\Controllers\Admin\GameController::class, 'show'])->name('admin_game_show');
    });




});



Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/users', [App\Http\Controllers\AdminUserController::class,'list'])->name('user_list');
    Route::get('users/add', [\App\Http\Controllers\AdminUserController::class, 'add'])->name('user_add');
    Route::post('users/create', [\App\Http\Controllers\AdminUserController::class, 'create'])->name('user_create');
    Route::get('users/edit/{id}', [\App\Http\Controllers\AdminUserController::class,'edit'])->name('user_edit');
    Route::post('users/update/{id}', [\App\Http\Controllers\AdminUserController::class,'update'])->name('user_update');
    Route::get('users/delete/{id}', [\App\Http\Controllers\AdminUserController::class, 'destroy'])->name('user_delete');
    Route::get('users/show/{id}', [\App\Http\Controllers\AdminUserController::class, 'show'])->name('user_show');
    Route::post('users/addrole/{id}', [\App\Http\Controllers\AdminUserController::class, 'addrole'])->name('user_add_role');
    Route::get( '/deleterole/{uid}/{rid}',[\App\Http\Controllers\AdminUserController::class ,'destroyrole'])->name( 'delete_role');
});











