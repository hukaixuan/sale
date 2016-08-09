<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
    return view('hello');
});

Route::get('welcome/{seat_id}', function ($seat_id) {
    return view('welcome',['seat_id'=>$seat_id]);
});
Route::get('test', function () {
    $data = 0;
    return view('test',['data',$data]);
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

});


Route::group(['middleware' => 'web','namespace' => 'Admin','prefix' => 'admin'], function() {  
    Route::get('/', 'AdminController@index');
    Route::resource('dish', 'DishController');
    Route::resource('seat','SeatController');
    Route::resource('type','TypeController');
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');
    Route::any('logout', 'AuthController@logout');
});





Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/menu/{seat_id}', 'MenuController@index');
    // Route::get('/checkout/{seat_id}', 'CheckoutController@index');

    //购物车相关
    // Route::get('/addDish/{dishId}/{seat_id}', 'OrderController@addDish');
    Route::post('/addDish', 'OrderController@addDish');
    // Route::get('/removeDish/{id}','OrderController@removeDish');
    Route::post('/removeDish','OrderController@removeDish');
    Route::get('/checkout/{seat_id}', 'OrderController@showOrder');

    Route::get('/final/{order_id}','FinalOrderController@index');

    //厨房端
    Route::get('/kitchen','KitchenController@index');
    Route::get('/kitchen/accomplish/{kitchenOrder_id}','KitchenController@accomplish');

    //收银端
    Route::get('/cashier', 'CashierController@index');
    Route::get('/cashier/checkout/{id}', 'CashierController@checkout');
});


















