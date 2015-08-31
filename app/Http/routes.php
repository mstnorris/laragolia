<?php

Route::get('jsonly', function() {
    return view('jsonly');
});

Route::get('/', function () {
    return view('welcome');
});
