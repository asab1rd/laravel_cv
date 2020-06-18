<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


Route::get('/', "AppController@index");
Route::get('/fr', "AppController@indexFr");

Route::get('/my/{social}', function (string $social) {
    switch ($social) {
        case 'instagram':
            return redirect('https://instagram.com/artkodes');
        case 'linkedin':
            return redirect('https://linkedin.com/in/zachbizimana');
        case 'github':
            return redirect('https://github.com/asab1rd');
        default:
            return redirect('/');
    }
});

Route::get('/download/{filename}', function ($filename) {

    $file_path = storage_path() . '/file/' . $filename;
    if (file_exists($file_path)) {
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: ' . filesize($file_path)
        ]);
    }
});
