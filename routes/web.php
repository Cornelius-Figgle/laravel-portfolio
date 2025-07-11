<?php

use App\Mail\ContactForm;
use Illuminate\Http\Request;
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
}) -> name('home');

Route::get('/projects', function () {
    return view('projects', ['occurrance' => occurrance()]);
})  -> name('projects');

Route::get('/contact', function () {
    return view('contact', ['occurrance' => occurrance()]);
}) -> name('contact');

Route::post('/contact-form', function (Request $request) {
    Mail::to(
        Config::get('mail.from.address')  // send email to me
    )->send(
        new ContactForm(
            $request::createFromGlobals()->get('name'),
            $request::createFromGlobals()->get('email'),
            $request::createFromGlobals()->get('message')
        )
    );

    return redirect('/contact?submitted=1');
}) -> name('contact-form');

Route::get('/welcome', function () {
    return view('welcome');
}) -> name('welcome');
