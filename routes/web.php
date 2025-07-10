<?php

use Illuminate\Support\Facades\Route;

function occurrance() {
    $nf = new NumberFormatter('en', NumberFormatter::SPELLOUT);

    $occurrance_file = fopen(__DIR__.'/../public/occurance.txt', 'r');
    $occurrance = fread($occurrance_file, filesize(__DIR__.'/../public/occurance.txt')) + 1;
    fclose($occurrance_file);

    $occurrance_file = fopen(__DIR__.'/../public/occurance.txt', 'w');
    fwrite($occurrance_file, $occurrance);
    fclose($occurrance_file);

    return $nf->format($occurrance);
}

Route::get('/', function () {
    return view('home', ['occurrance' => occurrance()]);
});

// Route::get('projects', function () {
//     return view('projects', ['occurrance' => occurrance()]);
// });

// Route::get('/contact', function () {
//     return view('contact', ['occurrance' => occurrance()]);
// });

Route::get('/welcome', function () {
    return view('welcome');
});
