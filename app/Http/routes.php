<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('404',function(){
    return view('errors.404');
});

Route::get('contact',function(){
    return view('page.contact');
});

Route::get('about',function(){
    return view('page.about');
});

Route::get('support',function(){
    return view('page.support');
});

Route::get('shortcode',function(){
    return view('page.shortcode');
});

Route::get('pad',function(){
    return view('page.pad');
});

Route::get('portable',function(){
    return view('page.portable');
});

Route::get('laptop',function(){
    return view('page.laptop');
});


//contact
Route::get('mailok',function(){
    return view('page.mailok');
});

Route::post('mailPost', function()
{
    $date = Input::all();

    Mail::send('emails.inquiry', array('subject'=>$date['subject'],'mes'=>$date['mes'],'email'=>$date['email'],'name'=>$date['name'],'pageid'=>$date['pageid']),function($message){
        $message->to(array('web@kejiafurnace.com'), 'inquiry')->subject('zirconia-furnace.com - 英语 - 网站询盘');
    });

    return Redirect::to('mailok');
});