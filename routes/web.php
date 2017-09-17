<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap');

/* ----------------------------------------------------------------------- */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/Frontend/');
});

/* ----------------------------------------------------------------------- */

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    includeRouteFiles(__DIR__.'/Backend/');
});

Route::resource('convenio/convenios', 'ConvenioController');

Route::resource('tipo/resolucion', 'TipoResolController');

Route::resource('tipo/convenio', 'TipoConvController');

Route::resource('pagina/index', 'IndexController');
//Route::get('convenio/convenios','Compra\\ConvenioController@index');
Route::resource('/portada', 'PortadaController');

Route::get('/contactanos','ContactController@Contact');

Route::get('/naturaleza','naturalezaController@Naturaleza');

Route::get('/Mision-Vision','MisiyvisiController@Misiandvisi');

Route::get('/Objetivos','ObjetivosController@Objective');

Route::get('/cuenta','ObjetivosController@Objective');

Route::get('/pagina/index/buscar/{id}/{id2}/{id3}/{id4}/anofijo','IndexController@DateBys');

Route::get('/pagina/index/buscar/{id}/resol','IndexController@tipoReso');

Route::get('/pagina/index/buscar/{id}/conv','IndexController@tipoConv');

Route::get('/pagina/index/buscar/autocomplete','IndexController@autocompleteajax');

Route::get('/pagina/index/buscar/{id}/resol2','IndexController@autocompleteajax2');


Route::get('/pagina/index/buscar/resol/xd','IndexController@autocompleteajax4');

Route::get('/pagina/index/buscar/resol/xd2','IndexController@autocompleteajax5');
