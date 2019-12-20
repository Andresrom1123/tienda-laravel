<?php
Route::get('products/read', function () {
    return view('products/read');
});

Route::get('products/create', function () {
    return view('products/create');
});

Route::get('products/delete', function () {
    return view('products/delete');
});

Route::get('products/update', function () {
    return view('products/update');
});