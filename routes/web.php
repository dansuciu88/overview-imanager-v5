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
    return view('admin.admin_login');
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



foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::middleware(['auth','role:admin', 'tenant'])->group(function (){
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

        Route::middleware(['auth','role:admin','tenant'])->group(function (){

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
                Route::get('/edit/projects/{id}', 'EditProjects')->name('edit.projects');
                Route::post('/update/projects', 'UpdateProjects')->name('update.projects');
                Route::get('/delete/projects/{id}', 'DeleteProjects')->name('delete.projects');
            });

            // Invoices route controller
            Route::controller(ServiceTypeController::class)->group(function (){
                Route::get('/all/invoices','AllInvoices')->name('all.invoices');
                Route::get('/add/invoices','AddInvoices')->name('add.invoices');
                Route::post('/store/invoices', 'StoreInvoices')->name('store.invoices');
                Route::get('/view/invoices/{id}','ViewInvoices')->name('view.invoices');
            });

            // Milestones route controller
            Route::controller(ServiceTypeController::class)->group(function (){
                Route::get('/all/milestones','AllMilestones')->name('all.milestones');
                Route::get('/add/milestones','AddMilestones')->name('add.milestones');
                Route::post('/store/milestones', 'StoreMilestones')->name('store.milestones');
                Route::get('/edit/milestones/{id}', 'EditMilestones')->name('edit.milestones');
                Route::post('/update/milestones', 'UpdateMilestones')->name('update.milestones');
                Route::get('/delete/milestones/{id}', 'DeleteMilestones')->name('delete.milestones');
            });

            // Contracts route controller
            Route::controller(ServiceTypeController::class)->group(function (){
                Route::get('/all/contracts','AllContracts')->name('all.contracts');
                Route::get('/add/contracts','AddContracts')->name('add.contracts');
                Route::post('/store/contracts', 'StoreContracts')->name('store.contracts');
                Route::get('/edit/contracts/{id}', 'EditContracts')->name('edit.contracts');
                Route::post('/update/contracts', 'UpdateContracts')->name('update.contracts');
                Route::get('/delete/contracts/{id}', 'DeleteContracts')->name('delete.contracts');
            });

            // Documents route controller
            Route::controller(ServiceTypeController::class)->group(function (){
                Route::get('/all/documents','AllDocuments')->name('all.documents');
                Route::get('/add/documents','AddDocuments')->name('add.documents');
                Route::post('/store/documents', 'StoreDocuments')->name('store.documents');
                Route::get('/edit/documents/{id}', 'EditDocuments')->name('edit.documents');
                Route::post('/update/documents', 'UpdateDocuments')->name('update.documents');
                Route::get('/delete/documents/{id}', 'DeleteDocuments')->name('delete.documents');
            });
        });
    });
}
