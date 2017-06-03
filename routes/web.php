<?php
use Illuminate\Support\Facades\DB;
use App\Petition;
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
    return view('welcome');
});

Route::get('hello/{nama}',function($nama){
    return ' Hello '  . $nama;
});
Route::get('hello/', function () {
    return view('Home');
});
Route::get('data', function () {
    $title = ' ini judul halaman web ';
    $body = ['a','b','c'];

    return view('Home',compact('title','body'));
});
//Route::get('petitions',function() {
    //$petitions = DB::table('petitions')->get();
    //$petitions = Petition::all();


//  Route::get('petitions','PetitionController@index',function(){

//});

Route::get('petitions','PetitionController@index',function(){

});

Route::get('app',function() {
   return view('layout/app');
});
Route::get('petitions/create','PetitionController@create');
Route::post('petitions/store','PetitionController@store');
Route::get('petitions/{id}/edit','PetitionController@edit');
Route::put('petitions/{id}','PetitionController@update');
Route::delete('petitions/{id}','PetitionController@destroy');
Route::get('/home','HomeController@index');
Route::get('petitions/{id}','PetitionController@show');
Route::get('mypetitions',function(){return Auth::user()->petitions;
})->middleware('auth');



















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
