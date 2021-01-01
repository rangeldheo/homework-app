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

Route::get('/',                      'Salesman@index')->name('vendedores');
Route::get('vendedores/{vendedor}',  'Salesman@show')->name('vendedores.show');
Route::get('vendedores',  'Salesman@create')->name('vendedores.create');
Route::post('vendedores', 'Salesman@store')->name('vendedores.store');

Route::get('vendas',            'Sale@create')->name('vendas.create');
Route::get('vendas/relatorio',  'Sale@report')->name('vendas.report');
Route::post('vendas/relatorio', 'Sale@reportSend')->name('vendas.reportSend');
Route::post('vendas',           'Sale@store')->name('vendas.store');
