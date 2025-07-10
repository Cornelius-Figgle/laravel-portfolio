<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nf = new NumberFormatter('en', NumberFormatter::SPELLOUT);

    $occurrance_file = fopen(__DIR__.'/../public/occurance.txt', 'r');
    $occurrance = fread($occurrance_file, filesize(__DIR__.'/../public/occurance.txt')) + 1;
    fclose($occurrance_file);

    $occurrance_file = fopen(__DIR__.'/../public/occurance.txt', 'w');
    fwrite($occurrance_file, $occurrance);
    fclose($occurrance_file);

    $occurrance = $nf->format($occurrance);

    return view('root', ['occurrance' => $occurrance]);
});

Route::get('/welcome', function () {
    return view('welcome');
});
