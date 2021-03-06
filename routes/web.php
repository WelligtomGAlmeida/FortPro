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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['as' => 'control-panel.', 'prefix' => '/control-panel'], function()
{
    Route::get('', ['as' => 'index', 'uses' => 'ControlPanelController@index']);
    Route::get('/email', ['as' => 'email', 'uses' => 'ControlPanelController@email']);

});

Route::group(['as' => 'account.', 'prefix' => '/account'], function()
{
    Route::get('', ['as' => 'index', 'uses' => 'AccountController@index']);
    Route::get('/show/{id}', ['as' => 'show', 'uses' => 'AccountController@show']);
    Route::get('/search/{search?}', ['as' => 'search', 'uses' => 'AccountController@search']);
    Route::get('/create', ['as' => 'create', 'uses' => 'AccountController@create']);
    Route::post('', ['as' => 'store', 'uses' => 'AccountController@store']);
    Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'AccountController@edit']);
    Route::put('/{id}', ['as' => 'update', 'uses' => 'AccountController@update']);
    Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'AccountController@destroy']);
});

Route::group(['as' => 'accountType.', 'prefix' => '/accountType'], function()
{
    Route::get('/find/{accountCategory?}', ['as' => 'find', 'uses' => 'AccountTypeController@find']);
});

Route::group(['as' => 'balance.', 'prefix' => '/balance'], function()
{
    Route::get('/get-balance', ['as' => 'getBalance', 'uses' => 'BalanceController@getBalance']);
    Route::get('/get-accounts-balances', ['as' => 'getAccountsBalances', 'uses' => 'BalanceController@getAccountsBalances']);
});

Route::group(['as' => 'transaction.', 'prefix' => '/transaction'], function()
{
    Route::get('/get-month-resume', ['as' => 'getMonthResume', 'uses' => 'TransactionController@getMonthResume']);
    Route::get('/get-transactions-months', ['as' => 'getTransactionsMonths', 'uses' => 'TransactionController@getTransactionsMonths']);
    Route::get('/get-month-transactions/{month}', ['as' => 'getMonthTransactions', 'uses' => 'TransactionController@getMonthTransactions']);
});
