<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['middleware' => 'auth', function () {
    return view('pages.index');
}]);

Route::group(['prefix' => 'cadastro', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'conta'], function () {
        Route::get('/', 'ContaController@index')->name('cadastro.conta');
        Route::get('/find/{id}', 'ContaController@findOne');
        Route::get('/findAll', 'ContaController@findAll');
        Route::post('/save', 'ContaController@save');
        Route::post('/remove', 'ContaController@remove');
    });
    
    Route::get('/previsao', function () {
        return view('pages.cadastro.previsao');
    });
    Route::get('/realizacao', function () {
        return view('pages.cadastro.realizacao');
    });
});

Route::group(['prefix' => 'relatorio', 'middleware' => 'auth'], function () {
    Route::get('/comparativo', function () {
        return view('pages.relatorio.comparativo');
    });
    Route::get('/conta', 'ContaController@relatorio');
    Route::get('/previsao', function () {
        return view('pages.relatorio.previsao');
    });
    Route::get('/realizacao', function () {
        return view('pages.relatorio.realizacao');
    });
    Route::get('/saldo', function () {
        return view('pages.relatorio.saldo');
    });
});
Route::auth();
