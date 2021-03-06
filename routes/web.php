<?php

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
// Pages web route
Route::get('/', 'PagesController@index')->name('home');
Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('404', 'PagesController@error')->name('404');
Route::get('shop', 'PagesController@comingSoon')->name('shop');
Route::get('blog', 'PagesController@blog')->name('blog');


Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::post('/newsletter', 'NewsletterController@store');
// Route::get('/thanks', 'NewsletterController@thanks')->name('thanks');

// use App\Mail\WelcomeMail;
// use Illuminate\Support\Facades\Mail;
// use App\User;

// $user = \Auth::loginUsingId(9);

// Route::get('/email', function() use($user){

//     Mail::to($user)->send(new WelcomeMail($user));
//     return new WelcomeMail($user);
// }
// ); 

 