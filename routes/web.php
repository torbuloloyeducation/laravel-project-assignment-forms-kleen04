<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hello, World!',
        'name' => 'John Doe',
        'age' => 30,
        'tasks' => ['Learn Laravel', 'Build a project', 'Deploy to production'],
    ]);
});

Route::post('/', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $emails = session('emails', []);

    if (count($emails) >= 5)
        return back()->with('warning', 'You have reached the maximum of 5 emails.');

    if (in_array($request->email, $emails))
        return back()->with('warning', 'That email has already been added.');

    $emails[] = $request->email;
    session(['emails' => $emails]);

    return back()->with('success', 'Email added successfully!');
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/services', 'services');
Route::view('/showcases', 'showcases');
Route::view('/blog', 'blog');
Route::view('/formtest', 'Emails');

Route::get('/formtest', function () {
    return view('formtest');
});

Route::post('/formtest', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $emails = session('emails', []);

    if (count($emails) >= 5)
        return back()->with('warning', 'You have reached the maximum of 5 emails.');

    if (in_array($request->email, $emails))
        return back()->with('warning', 'That email has already been added.');

    $emails[] = $request->email;
    session(['emails' => $emails]);

    return back()->with('success', 'Email added successfully!');
});

Route::get('/delete-emails', function(){
    session()->forget('$emails');
    return redirect('/formtest');
});

Route::get('/emails', function () {
    return view('emails');
});

Route::post('/emails', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $emails = session('emails', []);

    if (count($emails) >= 5)
        return back()->with('warning', 'You have reached the maximum of 5 emails.');

    if (in_array($request->email, $emails))
        return back()->with('warning', 'That email has already been added.');

    $emails[] = $request->email;
    session(['emails' => $emails]);

    return back()->with('success', 'Email added successfully!');
});

Route::post('/emails/delete', function (Request $request) {
    $emails = session('emails', []);
    unset($emails[$request->index]);
    session(['emails' => array_values($emails)]);

    return back()->with('success', 'Email removed.');
});