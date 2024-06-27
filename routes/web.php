<?php

use App\Hello\Hello;
use App\Hello\HelloFacade;
use App\Helpers\BitlyShortner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Contracts\Validation\Validator;
use Mohamed\BitlyShortner\Bitly;
use App\Http\Controllers\ArticleController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return Bitly::shortner("https://www.google.com");
// });

// Route::get('/', function(){
//     return app('coca-cola')->sayHi('test');
    // return HelloFacade::sayHi('Kareem');
    // return (new Hello)->sayHi("Mohamed");
// });

// Common Passwords
// Route::post('common-passwords', function(Request $request){
//     $validated = $request->validate([
//         'password' => ['dumbpwd', 'required',]
//     ]);
// })->name('common-password');

// // Google translate
// Route::get('translate', function(Request $request){
//     $tr = new GoogleTranslate();
//     $tr->setSource('en');
//     $tr->setTarget('ar');
//     echo $tr->translate('Hello World!'); // ترجمة النص
// });


// ===============

Route::resource('articles', ArticleController::class);