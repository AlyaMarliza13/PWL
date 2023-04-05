<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelModelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FamiliesController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramController;
use App\Models\ArtikelModel;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Auth;
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


// Route::get('/', [HomeController::class, 'index']);
// Route::prefix('product')->group(function () {
//     Route::get('/', [ProductsController::class, 'product']);
//     Route::get('/marbel-edu-games', function () {
//         return "Marbel Edu Game";
//     });
//     Route::get('/marbel-and-friends-kids-games', function () {
//         return "Marbel And Friends Kids Games";
//     });
//     Route::get('/riri-story-books', function () {
//         return "Riri Story Books";
//     });
//     Route::get('/kolak-kids-songs', function () {
//         return "Kolak Kids Songs";
//     });
// });
// Route::get("/news", [NewsController::class, "news"]);
// Route::get("/news/{id}", [NewsController::class, "news"]);
// Route::prefix("program")->group(function () {
//     Route::get('/', [ProgramController::class, 'program']);
//     Route::get("kurir", [ProgramController::class, "Kurir"]);
//     Route::get("magang", [ProgramController::class, "Magang"]);
//     Route::get("kunjungan-industri", [ProgramController::class, "kunjunganIndustri"]);
// });
// Route::get("/about-us", [AboutController::class, "aboutus"]);
// Route::get("/contact-us", [ContactController::class, "contact"]);

//Route::get("/article", [ArtikelModelController::class, "index"]);

Auth::routes();

Route::get('Logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function() {

    Route::get('/profil', [ProfilController::class, 'profil']);
    Route::get('/', [ProfilController::class, 'profil']);
    Route::get('/profil', [ProfilController::class, 'profil']);
    Route::get('/pengalamankuliah', [KuliahController::class, 'kuliah']);
    Route::get("/hobbies", [HobbiesController::class, "index"]);
    Route::get("/families", [FamiliesController::class, "index"]);
    Route::get("/courses", [CoursesController::class, "index"]);

    Route::resource('/mahasiswa', MahasiswaController::class);
});
