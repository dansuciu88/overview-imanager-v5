<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\ServiceTypeController;
use App\Http\Controllers\ProfileController;
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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function (){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
}); // END ADMIN GROUP middleware

Route::middleware(['auth','role:agent'])->group(function (){
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
}); // END AGENT GROUP middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::middleware(['auth','role:admin'])->group(function (){

    // Service Type All route controller
   Route::controller(ServiceTypeController::class)->group(function (){
       Route::get('/all/service-type','AllServiceType')->name('all.service-type');
       Route::get('/add/service-type', 'AddServiceType')->name('add.service-type');
       Route::post('/store/service-type', 'StoreServiceType')->name('store.service-type');
       Route::get('/edit/service-type/{id}', 'EditServiceType')->name('edit.service-type');
       Route::post('/update/service-type', 'UpdateServiceType')->name('update.service-type');
       Route::get('/delete/service-type/{id}', 'DeleteServiceType')->name('delete.service-type');
   }) ;

    // Clients route controller
    Route::controller(ServiceTypeController::class)->group(function (){
        Route::get('/all/clients','AllClients')->name('all.clients');
        Route::get('/add/clients','AddClients')->name('add.clients');
        Route::post('/store/clients', 'StoreClients')->name('store.clients');
        Route::get('/edit/clients/{id}', 'EditClients')->name('edit.clients');
        Route::post('/update/clients', 'UpdateClients')->name('update.clients');
        Route::get('/delete/clients/{id}', 'DeleteClients')->name('delete.clients');
    });

    // Projects route controller
    Route::controller(ServiceTypeController::class)->group(function (){
        Route::get('/all/projects','AllProjects')->name('all.projects');
        Route::get('/add/projects','AddProjects')->name('add.projects');
        Route::post('/store/projects', 'StoreProjects')->name('store.projects');
    });
});

