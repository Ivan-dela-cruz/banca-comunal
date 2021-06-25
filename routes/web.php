<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
    PageController
};

use App\Http\Livewire\ShowEvents;
use App\Http\Livewire\Members\{
    Member,
    NewMember,
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

});


// Registrando um serviço de exemplo
// App::bind('LogExemplo', function($app) {
//     return "Log Registrado";
// });

// $exemplo = App::make('LogExemplo');

// dd($exemplo);
