<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recinto;
use App\Models\Animal;
use App\Models\Cuidador;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\RecintoController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CartController;
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

Route::get('/',[HomeController::class, 'index']);

/*HABITAT*/
Route::get('/habitatMenu', [HabitatController::class, 'showMenu'] )->middleware('auth');
Route::get('/habitatAdminMenu', [HabitatController::class, 'showAdminMenu'])->name('habitatAdmin.menu')->middleware('auth','admin');
Route::get('/showHabitat/{id}', [HabitatController::class, 'showHabitat'])->middleware('auth');
Route::get('/showAdminHabitat/{id}', [HabitatController::class, 'showAdminHabitat'])->name('habitatAdmin.show')->middleware('auth','admin');
Route::post('/addHabitat', [HabitatController::class, 'addHabitat'])->name('habitat.add')->middleware('auth','admin');
Route::post('/updateHabitat', [HabitatController::class, 'updateHabitat'])->name('habitat.update')->middleware('auth','admin');
Route::get('/deleteHabitat/{id}', [HabitatController::class, 'deleteHabitat'])->name('habitat.delete')->middleware('auth','admin');

/*RECINTO*/
Route::get('/showRecinto/{id}', [RecintoController::class, 'showRecinto'] )->middleware('auth');
Route::get('/showAdminRecinto/{id}', [RecintoController::class, 'showAdminRecinto'])->name('recintoAdmin.show')->middleware('auth','admin');
Route::get('/showAllRecintos', [RecintoController::class, 'showAllRecintos'] )->middleware('auth');
Route::get('/recintoAdminMenu', [RecintoController::class, 'showAllRecintosMenu'])->name('recintoAdmin.menu')->middleware('auth','admin');
Route::post('/addRecinto', [RecintoController::class, 'addRecinto'])->name('recinto.add')->middleware('auth','admin');
Route::post('/updateRecinto', [RecintoController::class, 'updateRecinto'])->name('recinto.update')->middleware('auth','admin');
Route::get('/deleteRecinto/{id}', [RecintoController::class, 'deleteRecinto'])->name('recinto.delete')->middleware('auth','admin');

/*ANIMAL*/
Route::get('/showAnimal/{id}', [AnimalController::class, 'showAnimal'] )->middleware('auth');
Route::get('/animalAdminMenu', [AnimalController::class, 'showAllAnimalesRecinto'] )->middleware('auth','admin');
Route::get('/showTipoAnimal/{recinto}', [AnimalController::class, 'showTipoAnimal'] )->name('animalAdmin.menu')->middleware('auth','admin');
Route::post('/addAnimal', [AnimalController::class, 'addAnimal'])->name('animal.add')->middleware('auth','admin');
Route::post('/updateAnimal', [AnimalController::class, 'updateAnimal'])->name('animal.update')->middleware('auth','admin');
Route::get('/showAnimalEspecifico/{id}', [AnimalController::class, 'showAnimalEspecifico'] )->name('animalAdmin.show')->middleware('auth','admin');
Route::get('/deleteAnimal/{id}', [AnimalController::class, 'deleteAnimal'])->name('animal.delete')->middleware('auth','admin');

/*USUARIO*/
Route::get('/userAdminMenu', [UsuarioController::class, 'showMenu'])->name('userAdmin.menu')->middleware('auth','admin');
Route::get('/showAdminUser/{id}', [UsuarioController::class, 'showAdminUser'])->name('userAdmin.show')->middleware('auth','admin');
Route::post('/updateUser', [UsuarioController::class, 'updateUser'])->name('user.update')->middleware('auth','admin');
Route::get('/deleteUser/{id}', [UsuarioController::class, 'deleteUser'])->name('user.delete')->middleware('auth','admin');

/*ENTRADAS*/
Route::get('/showProductos', [ProductoController::class, 'showProducto'] )->middleware('auth');
Route::get('/productoDetalles/{id}', [ProductoController::class, 'showDetalles'] )->middleware('auth');
Route::get('/productoCarrito/{id}', [ProductoController::class, 'addCarrito'] )->middleware('auth');



/*RESTAURANTE*/
Route::get('/showRestaurante', function(){
    return view('restaurante/showRestaurante');
})->middleware('auth');

/*ADMIN*/
Route::group(['middleware' => ['admin']], function () {
    Route::get('adminHome', [HomeController::class, 'adminView']);
});

/*CARRITO*/
Route::post('/cart-add', [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::get('/cart-checkout',[CartController::class, 'cart'])->name('cart.checkout')->middleware('auth');
Route::post('/cart-clear',  [CartController::class, 'clear'])->name('cart.clear')->middleware('auth');
Route::post('/cart-removeitem',  [CartController::class, 'removeitem'])->name('cart.removeitem')->middleware('auth');


/**/
Auth::routes();

Route::get('/apiAllHabitat', [HabitatController::class, 'apiHabitats'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
