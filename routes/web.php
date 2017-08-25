<?php

Route::group(['namespace' => 'Site'], function() {
    Route::get('/', 'SiteController@index');
    Route::get('/adicionar/configuracao', 'SiteController@cadastroConfiguracao');
    Route::get('/adicionar/usuario', 'SiteController@cadastroUsuario');
});
