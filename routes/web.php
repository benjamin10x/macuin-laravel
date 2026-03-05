<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('index');

Route::get('/catalogo', function () {
    return view('catalogos.catalogo');
})->name('catalogo');

Route::get('/registro', function () {
    return view('auth.registro');
})->name('registro');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/carrito', function () {
    return view('carrito.carrito');
})->name('carrito');

Route::get('/pedidos', function () {
    return view('pedidos.pedido');
})->name('pedidos');

Route::get('/pedido-detalle/{id}', function ($id) {
    return view('pedidos.pedido-detalle', ['id' => $id]);
})->name('pedido-detalle');
