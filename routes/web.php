<?php

use Illuminate\Support\Facades\Route;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Rules\ValidHCaptcha;
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

Route::group([
    'prefix' => '{locale}',
    'middleware' => 'setLocale'
], function() {
    // put your routes here
    Route::get('/en', function(){
       return view('indexEN');
    });
});
// add this so when you call route('...') you don't get the error "parameter 'locale' is not set"
// this is required because all laravel's default auth routes won't add the 'locale' parameter

Illuminate\Support\Facades\URL::defaults(['locale' => app('locale-for-client')]);

// redirect the home page route to a specific locale
Route::get('/', function () {
    return redirect(app('locale-for-client'));
});

Route::get('/en', function(){
    return view('en.index');
});
Route::get('/es', function(){
    return view('es.index');
});
Route::get('/it', function(){
    return view('it.index');
});

Route::post('/mailPost', function(Request $request){

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
       // 'h-captcha-response' => ['required', new ValidHCaptcha()],
    ]);

    $correo = new ContactMailable($request->all());
    Mail::to('contact@maximoprandi.me')->send($correo);

    return redirect()->back()->with('information', 'emailSent');
});
