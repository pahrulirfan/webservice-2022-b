<?php

use Illuminate\Support\Facades\Route;


// tambah keterangan yang ada di file web.php

Route::get('/', function () {
    return view('welcome');
});
