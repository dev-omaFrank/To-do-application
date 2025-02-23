<?php

use Illuminate\Support\Facades\Route;
use Spatie\Html\Html;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Spatie\Html\Elements\Input;

Route::get('/', function () {
    return view('home');
});

// about
Route::get('/about', function () {
    return view('about');
});

//display contact page
Route::get('/contact', function () {
    return view('contact');
});

//display reminder page
Route::get('/reminder', function () {
    return view('emails.auth.reminder');
});


//handle contact post
Route::post('/contact', function(){
    $data = request()->all();
    // dd($data);
    $rules = [
        'subject'=> 'required',
        'message'=> 'required',
    ];
    $validator = Validator($data, $rules);

    if ($validator->fails()) {
        return redirect('contact')->withErrors($validator)->withInput();
    }

    $emailContent = [
        'subject'=> $data['subject'],
        'emailMessage'=> $data['message'],
    ];

    Mail::send('contactemail', $emailContent, function($message){
        $message->to('airdropexplorer7@gmail.com')->subject('ToDo App Support')
                ->subject('Contact via our contact form');
    });
    return 'Your message has been sent as an email';
});