<?php

use App\Http\Controllers\controladorViews;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//Route::view('main','main')->name('apodoMain');

//Route::view('form','form')->name('apodoForm');

//Route::view('table','table')->name('apodoTable');

//RUTAS AGRUPADAS PARA CONTROLADOR
route::controller(controladorViews::class)->group(
    function (){
        Route::get('/','showHome');
        Route::get('main', 'showMain')->name('apodoMain');
        Route::get('form', 'showForm')->name('apodoForm');
        Route::get('table', 'showTable')->name('apodoTable');
    }
);

Route::post('GuardarForm', [controladorViews::class, 'guardarForm'])->name('guardarForm');
