<?php

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

// Route::get('/', function () {

//     // Read File
//     $jsonString = file_get_contents(base_path('storage/test.json'));
//     $data = json_decode($jsonString, true);
//     dd($data);
//     // foreach($data as $item){
//     //     <td>{{}}</td>
//     // }
//     // Update Key

//     // $data['country.title'] = "Change Manage Country";



//     // Write File

//     // $newJsonString = json_encode($data, JSON_PRETTY_PRINT);

//     // file_put_contents(base_path('resources/lang/en.json'), stripslashes($newJsonString));



//     // Get Key Value

//     // dd(__('country.title'));

// });
Route::get('/',function(){
    return view('welcome');
});
Route::get('index','SearchController@index');
Route::get('/search','SearchController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
