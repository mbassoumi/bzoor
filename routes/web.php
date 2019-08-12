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



Route::group(['prefix' => 'admin'], function (\Illuminate\Routing\Router $router){

    $router->group(['prefix'=> 'settings'], function (\Illuminate\Routing\Router $router){

        $router->get('roles', 'RoleController@index')->name('setting.role.index');
        $router->get('equation', function (){
           dd('get equation');
        });


    });

});


Route::get('majd', function (\Illuminate\Http\Request $request, \App\Http\DataTables\RoleDataTable $dataTable) {
//    return $dataTable->filters()[0]['function']();
    return $dataTable->data($request);
    $attributes = $request->all();
    $page = 1;
    $length = $request->get('length', 10);
    $draw = $request->get('draw', 1);

    if ($request->has('page')) {
        $page = $request->get('page', 1);
    } elseif ($request->has('start', 'length')) {
        $start = $attributes['start'];
        $length = $attributes['length'];
        $page = intval($start / $length) + 1;
    }

    $query = \App\User::query()->paginate($length, '*', "page", $page);
    $data = \App\Http\Resources\RoleResource::collection($query);
    $total = $query->total();
    $additionalDataForDatatable = [
        'draw' => $draw,
        'recordsTotal' => $total,
        'recordsFiltered' => $total,
    ];
    $data->additional($additionalDataForDatatable);
    return $data;

});
