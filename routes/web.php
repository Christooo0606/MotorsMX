<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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



 
Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-auth/callback', function () {
   
        $user_google = Socialite::driver('google')->stateless()->user();
      
     
        $user = User::updateOrCreate([
            'google_id' => $user_google->id,
        ], [
            'name' => $user_google->name,
            'avatar' => $user_google->avatar,
            'email' => $user_google->email,
          
        ]);
     
        Auth::login($user);
     
        return redirect('/dashboard');
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



/*
|--------------------------------------------------------------------------
| API GOOGLE
|--------------------------------------------------------------------------
| Al momento de clonar el repositorio es importante recordar que pára su funcionamiento
| se haga  un composer install para instalar las dependencias despues crear la llave con 
| el comando: php artisan key:generate despues de clonar el archivo .env y despues  configurarlo.
| instalar tambien npm install y npm run dev y no olvidar ejecutar el siguiente comando en consola
| composer require laravel/socialite
*/

