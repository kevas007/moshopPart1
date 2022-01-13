<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\MagasinController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfilController;
use App\Models\Magasin;
use App\Models\Panier;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
//     $user= User::inRandomOrder()->first();
// $datas = $user->magasins->produits;
$datas= DB::table('magasins')
->join('produits', 'magasins.id', '=', 'produits.magasins_id')
->join('users', 'magasins.user_id', '=', 'users.id')
->where ('magasins.user_id', '=', '1')
->select('magasins.name as magasin_name', 'produits.name as produit_name', 'users.firstname as user_firstname', 'users.lastname as user_lastname', 'produits.description as produit_description', 'produits.price as produit_price', 'produits.cover_path as produit_cover_path', 'produits.quantity as produit_quantity')
->get();


// dd($datas);
    return view('Frontend.pages.vue', compact('datas'));
});
Route::get('/shop/{id}', function ($id) {
    $magasin = Magasin::find($id);
    $produits = $magasin->produits;
    // dd($produits->first());
    return view('Frontend.pages.shop', compact('produits'));
})->middleware(['auth']);

Route::get('/magasin', [MagasinController::class, 'index'])->middleware(['auth']);

Route::get('/magasin/{id}', [MagasinController::class, 'show'])->middleware(['auth']);

Route::post('/panier/{id}', [PanierController::class, 'add'])->middleware(['auth']);

Route::get('/panier', [PanierController::class, 'index'])->middleware(['auth']);

Route::delete('/panier/{id}', [PanierController::class, 'destroy'])->middleware(['auth']);

Route::post('/commande/', [CommandeController::class, 'store'])->middleware(['auth']);


Route::get('/commande', [CommandeController::class, 'index'])->middleware(['auth']);


Route::get('/commande/{id}', [CommandeController::class, 'show'])->middleware(['auth']);



Route::get('/user/{id}', [ProfilController::class, 'edit'])->middleware(['auth']);

Route::put('/user/{id}', [ProfilController::class, 'update'])->middleware(['auth']);

Route::delete('/shop/{id}', [ProduitController::class, 'destroy'])->middleware(['auth']);

Route::get('/shop', [ProduitController::class, 'create'])->middleware(['auth']);

Route::post('/shop', [ProduitController::class, 'store'])->middleware(['auth']);

Route::get('/shop/{id}/edit', [ProduitController::class, 'edit'])->middleware(['auth']);

Route::put('/shop/{id}', [ProduitController::class, 'update'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
