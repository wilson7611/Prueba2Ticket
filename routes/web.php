<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\MedicoController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// // routes/web.php
// Route::get('/buscar-afiliado', [AfiliadoController::class, 'buscarAfiliadoForm'])->name('buscarAfiliadoForm');
// Route::post('/buscar-afiliado', [AfiliadoController::class, 'buscarAfiliado'])->name('buscarAfiliado');
// Route::get('/registrar-ticket', [TicketController::class, 'formularioRegistro'])->name('formularioRegistro');
// Route::post('/registrar-ticket', [TicketController::class, 'registrarTicket'])->name('registrarTicket');


// Route::get('/validar-afiliado', [AfiliadoController::class],'validarAfiliadoForm')->name('validarAfiliadoForm');
// Route::post('/validar-afiliado', [AfiliadoController::class], 'validarAfiliado')->name('validarAfiliado');

Route::get('/', function () {
    return redirect()->route('afiliados.index');
});


// routes/web.php
Route::get('/afiliados', [AfiliadoController::class, 'index'])->name('afiliados.index');
Route::post('/afiliados/validar', [AfiliadoController::class, 'validarAfiliado'])->name('afiliados.validar');
Route::get('/afiliados/especialidades', [AfiliadoController::class, 'especialidades'])->name('afiliados.especialidades');
Route::get('/validar-afiliado', [AfiliadoController::class, 'validarAfiliadoForm'])->name('validarAfiliadoForm');

Route::get('/afiliados/registrar/{afiliado}/{especialidad}/{medico}/{hospital}', [TicketController::class, 'registrarForm'])->name('afiliados.registrar');
Route::post('/afiliados/registrar', [TicketController::class, 'registrar'])->name('afiliados.registrar.post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     // Agrega otras rutas de administración según sea necesario
// });

// Route::get('/medicos/index', [MedicoController::class, 'index']);
// Route::get('/medicos', [MedicoController::class, 'index']);
// Route::post('/store', [MedicoController::class, 'store'])->name('store');
// Route::get('/fetchall', [MedicoController::class, 'fetchAll'])->name('fetchAll');
// Route::delete('/delete', [MedicoController::class, 'delete'])->name('delete');
// Route::get('/edit', [MedicoController::class, 'edit'])->name('edit');
// Route::post('/update', [MedicoController::class, 'update'])->name('update');



Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
// Route::get('/medicos', [MedicoController::class, 'index']);
Route::post('/store', [MedicoController::class, 'store'])->name('store');
Route::get('/fetchall', [MedicoController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [MedicoController::class, 'delete'])->name('delete');
Route::get('/edit', [MedicoController::class, 'edit'])->name('edit');
Route::post('/update', [MedicoController::class, 'update'])->name('update');

Route::get('/especialidades', [EspecialidadController::class, 'index'])->name('especialidades.index');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');