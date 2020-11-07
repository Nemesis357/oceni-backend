<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/getConfig', function () {
    // $config = [];
    $user = [
        'firstName' => 'Nenad',
        'lastName'  => 'Nikolic',
    ];
    $mainMenu = [
        'controlls' => [
            'city' => [
                'type' => 'autoComplete',
                'title' => 'City',
            ],
            'category' => [
                'type' => 'checkbox',
                'title' => 'Category',
            ],
        ]
    ];

    return response()->json(array('user'=>$user, 'mainMenu'=>$mainMenu));
});

Route::post('/city/{city}', [CityController::class, 'getCity']);
Route::post('/cityAutocomplete', [CityController::class, 'getCityAutoComplete']);
Route::get('/city', [CityController::class, 'getCities']);