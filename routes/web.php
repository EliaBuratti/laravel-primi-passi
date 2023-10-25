<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $lists_route = ['/about', '/help'];
    return view('home', compact('lists_route'));
});

Route::get('/help', function () {

    $message = 'Please, check our FAQ before to contact us';
    $faqs = [
        'first answer' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident reprehenderit amet ullam id deserunt maxime, iste architecto neque ipsam consectetur voluptas perferendis, magnam aut placeat ad, necessitatibus iure aperiam eaque.',
        'second answer' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident reprehenderit amet ullam id deserunt maxime, iste architecto neque ipsam consectetur voluptas perferendis, magnam aut placeat ad, necessitatibus iure aperiam eaque.',
        'third answer' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident reprehenderit amet ullam id deserunt maxime, iste architecto neque ipsam consectetur voluptas perferendis, magnam aut placeat ad, necessitatibus iure aperiam eaque.',
    ];
    return view('help', compact('message', 'faqs'));
});


Route::get('/about', function () {

    $message = 'Find us on socials';
    return view('about', compact('message'));
});
