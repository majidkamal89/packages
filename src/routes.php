<?php

Route::get('products', function(){
    $products = \DB::select("SELECT * FROM products");
    return view('productadmin::products', compact('products'));
});