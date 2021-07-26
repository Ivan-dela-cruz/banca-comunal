<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
    PageController
};
use App\Http\Controllers\Report\{
    Libreta
};

use App\Http\Livewire\ShowEvents;
use App\Http\Livewire\Members\{
    Member,
    NewMember,
    Profile,
//    References,
};
use App\Http\Livewire\Roles\{
    Roles
};
use App\Http\Livewire\NoteBook\{
    NoteBooks,
    NoteBooksList
};
use App\Http\Livewire\Users\Users;

use App\Http\Livewire\CreditRequest\{
   NewRequest,
    EditRequest,
   ListRequests
};
use App\Http\Livewire\AdvisorVisit\{
    NewVisit,
    EditVisit,
    Visits
};
use App\Http\Livewire\Amortization\{
    AmortizationTable,
};

use App\Http\Livewire\Credit\{
    Credits,
    NewCredit
 };
 use App\Http\Livewire\Accounts\{
    Accounts
 };
use App\Http\Livewire\Incomes\{
    MemberContributions
 };
use App\Http\Livewire\Dashboard\{
    Index
 };

use App\Http\Livewire\Transations\{
   Deposits,
   Retreats
 };
use App\Http\Livewire\Payment\{
    Payments
  };
use App\Http\Controllers\contable\{
    HomeController,
    categoriesController,
    summaryController,
    accountController,
    detalleController,
    totalController,
    attachedController,
    futuroController,
    toursController,
    balanceController,
    pdfController,
    transferController,
    bitacoraController,
    permissionsController,
    usersController
  };
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

Route::middleware('loggedin')->group(function() {
    Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'registerView'])->name('register-view');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function() {
   // Route::get('/', [PageController::class, 'loadPage'])->name('dashboard');
   Route::get('/', Index::class)->name('dashboard');
    Route::get('/eventos', ShowEvents::class)->name('events');
    Route::get('/miembros', Member::class)->name('members');
    Route::get('/nuevo-miembro', NewMember::class)->name('new-member');
    Route::get('/perfil/{id}', Profile::class)->name('perfil');
    Route::get('/usuarios', Users::class)->name('users');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('page/{layout}/{theme}/{pageName}', [PageController::class, 'loadPage'])->name('page');

    //RUTA PARA LOS ROLES
    Route::get('/roles', Roles::class);

    //CREDIT REQUEST
    Route::get('/nueva-solicitud', NewRequest::class)->name('new-request');
    Route::get('/editar-solicitud/{id}', EditRequest::class)->name('update-request');
    Route::get('/listado-solicitudes', ListRequests::class)->name('request-list');

    //VISITAS
    Route::get('/visita-de-asesor', NewVisit::class)->name('advisor-visit');
    Route::get('/editar-visita/{id}', EditVisit::class)->name('update-visit');
    Route::get('/listado-visitas', Visits::class)->name('visit-list');

    Route::get('/amortizacion-tabla', AmortizationTable::class);

    //CREDITOS
    Route::get('/creditos', Credits::class);
    Route::get('/nuevo-credito', NewCredit::class);

    //LIBRETAS
    Route::get('/nueva-libreta', NoteBooks::class);
    Route::get('/libretas', NoteBooksList::class);

    //ACCOUNTS
    Route::get('/listado-cuentas', Accounts::class);
    //APORTES
    Route::get('/aportes-socios', MemberContributions::class);

    //TRANSACCIONES
    Route::get('/deposito', Deposits::class)->name('deposit');
    Route::get('/retiro', Retreats::class)->name('retreats');

    //PAYMENTS
    Route::get('/nuevo-pago', Payments::class)->name('nuevo-pago');
    
    //*****************************CONTABLE MODULE*********************** 
    //******************************************************************* */
    
    //listar account                                                   	/
    Route::get('account/account',[accountController::class,'index']);
    //agregar account
    Route::get('account/create', function ()    {
    return view('vendor.adminlte.account.create');
    });
    Route::post('account/save',[accountController::class,'save']);
    //editar account
    Route::get('account/edit', function ()    {
    return view('vendor.adminlte.account.edit');
    });
    Route::get('account/edit/{id}',[accountController::class,'edit']);
    Route::put('account/editar/{id}',[accountController::class,'update']);
    //eliminar account
    Route::delete('account/eliminar/{id}',[accountController::class,'destroy']);
    //detalle
    Route::get('account/detalle/{id}',[accountController::class,'detalle']);
    //listar categories                                                 /
    Route::get('categories/categories',[categoriesController::class,'index']);
    //agregar categories
    Route::get('categories/create', function ()    {
    return view('vendor.adminlte.categories.create');
    });
    Route::post('categories/save',[categoriesController::class,'save']);
    //editar categories
    Route::get('categories/edit', function ()    {
    return view('vendor.adminlte.categories.edit');
    });
    Route::get('categories/edit/{id}',[categoriesController::class,'edit']);
    Route::put('categories/editar/{id}',[categoriesController::class,'update']);
    //eliminar categories
    Route::delete('categories/eliminar/{id}',[categoriesController::class,'destroy']);

    Route::get('categories/categories/attr/{id}',[categoriesController::class,'view_attr']);
    Route::post('categories/categories/attr/{id}',[categoriesController::class,'save_attr']);

    Route::get('categories/attr/{id}',[categoriesController::class,'get_all']);
    Route::get('categories/eliminarattr/{id}',[categoriesController::class,'destroyattr']);
    //listar attached                                                 	/
    Route::get('attached/attached',[categoriesController::class,'index']);
    //agregar attached
    Route::get('attached/create', function ()    {
    return view('vendor.adminlte.attached.create');
    });
    Route::get('attached/create/{id}',[categoriesController::class,'nuevo']);
    Route::post('attached/save',[categoriesController::class,'save']);
    //editar attached
    Route::get('attached/edit', function ()    {
    return view('vendor.adminlte.attached.edit');
    });
    Route::get('attached/edit/{id}',[categoriesController::class,'edit']);
    Route::put('attached/editar/{id}',[categoriesController::class,'update']);
    //eliminar attached
    Route::delete('attached/eliminar/{id}',[categoriesController::class,'destroy']);
    //listar attached                                                 	/
    Route::get('summary/summary',[summaryController::class,'index']);
    //agregar attached
    Route::get('summary/create',[summaryController::class,'crear']);

    Route::post('summary/save',[summaryController::class,'save']);
    //editar attached
    Route::get('summary/edit', function ()    {
    return view('vendor.adminlte.summary.edit');
    });
    Route::get('summary/edit/{id}',[summaryController::class,'edit']);
    Route::put('summary/editar/{id}',[summaryController::class,'update']);
    //eliminar attached
    Route::delete('summary/eliminar/{id}',[summaryController::class,'destroy']);
    Route::delete('summary/eliminart/{id}',[summaryController::class,'destroyt']);
    //listar attached                                                 	/
    Route::get('montos/montos',[totalController::class,'totales']);
    //agregar attached
    Route::get('/home',[HomeController::class,'index']);
    Route::get('/statisjson',[HomeController::class,'grafica']);

    //detalle                                                           /
    Route::get('detalle/detalle/{id}',[detalleController::class,'view']);
    Route::get('/download/{id}' , [detalleController::class,'downloadFile']);
    //listar users                                                      /
    Route::get('users/users',[usersController::class,'index']);
    Route::get('users/activar/{id}',[usersController::class,'activar']);
    Route::get('users/desactivar/{id}',[usersController::class,'desactivar']);
    Route::delete('users/eliminar/{id}',[usersController::class,'destroy']);
    //listar transferencia                                            //
    Route::get('transfer/create',[transferController::class,'totales']);
    Route::post('transfer/save',[transferController::class,'save']);
    Route::get('transfer/consul/{id}',[transferController::class,'consul']);
    Route::get('transfer/edit/{id}',[transferController::class,'edit']);
    Route::put('transfer/editar/{id}',[transferController::class,'update']);
    //bitacora
    Route::get('bitacora/bitacora',[bitacoraController::class,'index']);
    Route::get('pdf', [pdfController::class,'index']);
    Route::get('tours/tours',[toursController::class,'index']);
    //agregar categories
    Route::get('tours/create', function ()    {
    return view('vendor.adminlte.tours.create');
    });
    Route::post('tours/save',[toursController::class,'save']);
    //editar categories
    Route::get('tours/edit', function ()    {
    return view('vendor.adminlte.tours.edit');
    });
    Route::get('tours/edit/{id}',[toursController::class,'edit']);
    Route::put('tours/editar/{id}',[toursController::class,'update']);
    // //eliminar categories
    Route::delete('tours/eliminar/{id}',[toursController::class,'destroy']);
    Route::get('tours/eliminarattr/{id}',[toursController::class,'destroyattr']);
    Route::get('tours/tours/attr/{id}',[toursController::class,'view_attr']);
    Route::post('tours/tours/attr/{id}',[toursController::class,'save_attr']);
    Route::get('tours/attr/{id}',[toursController::class,'get_all']);
    Route::get('tours/ver/{id}',[toursController::class,'ver']);
    Route::get('tours/fecha/{id}',[toursController::class,'fecha']);
    Route::get('tours/tours/select',[toursController::class,'select']);
    Route::get('futuro/futuro',[futuroController::class,'index']);
    Route::get('pdffuturo', [pdfController::class,'indexfuturo']);
    Route::get('future/edit/{id}',[futuroController::class,'edit']);
    Route::put('future/editar/{id}',[futuroController::class,'update']);
    Route::get('future/acept/{id}',[futuroController::class,'acept']);
    //roles
    Route::get('permisos/ver/{id}',[permissionsController::class,'index']);
    Route::get('users/update/{id}',[permissionsController::class,'update']);
    //listar balances de  categories
    Route::get('balance/balance',[balanceController::class,'index']);
    Route::get('balance/balance/out',[balanceController::class,'indexinit']);
    Route::get('balance/balance/add',[balanceController::class,'indexadd']);
});


Route::get('notebook-pdf/{id}',[Libreta::class,'notebook'])->name('notebook-pdf');
Route::get('transactions-pdf/{id}',[Libreta::class,'transactions'])->name('transactions-pdf');







