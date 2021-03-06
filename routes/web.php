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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function (\Illuminate\Routing\Router $router) {

    $router->group(['prefix' => 'settings'], function (\Illuminate\Routing\Router $router) {

        $router->get('roles', 'RoleController@index')->name('setting.role.index');
        $router->get('equation', function () {
            dd('get equation');
        });


    });

    $router->group(['prefix' => 'cars'], function (\Illuminate\Routing\Router $router) {

        $router->get('all-cars', 'CarController@index')->name('car.all-cars');
//        $router->get('/car/{car}', 'CarController@show')->name('car.show');
        $router->resource('/car', 'CarController');

    });



});


Route::get('majd2', function (){
    return '<h1>fuck off</h1>';
});
