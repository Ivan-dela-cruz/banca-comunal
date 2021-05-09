<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
    PageController
};

use App\Http\Livewire\ShowEvents;
use App\Http\Livewire\Members\{
    Member,
    NewMember
};
use App\Http\Livewire\Roles\{
    Roles
};
use App\Http\Livewire\NoteBook\{
    NoteBooks
};
use App\Http\Livewire\Users\Users;


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
    Route::get('/', [PageController::class, 'loadPage'])->name('dashboard');
    Route::get('/eventos', ShowEvents::class)->name('events');
    Route::get('/miembros', Member::class)->name('members');
    Route::get('/nuevo-miembro', NewMember::class)->name('new-member');
    Route::get('/usuarios', Users::class)->name('users');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('page/{layout}/{theme}/{pageName}', [PageController::class, 'loadPage'])->name('page');

    //RUTA PARA LOS ROLES 
    Route::get('/roles', Roles::class);
    Route::get('/libretas', NoteBooks::class);

});


// Registrando um serviço de exemplo
// App::bind('LogExemplo', function($app) {
//     return "Log Registrado";
// });

// $exemplo = App::make('LogExemplo');

// dd($exemplo);
