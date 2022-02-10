<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    $hipsum = "I'm baby irony pabst stumptown chicharrones pour-over kogi tousled cornhole chillwave single-origin coffee. Migas pok pok church-key, air plant humblebrag chillwave man braid next level poke. Shaman drinking vinegar forage vape chambray vaporware. Leggings kitsch copper mug edison bulb.

    Wayfarers chartreuse chia, williamsburg occupy freegan crucifix DIY forage. YOLO vinyl stumptown vegan listicle jean shorts viral swag kinfolk try-hard freegan live-edge. Mlkshk blue bottle sustainable dreamcatcher normcore gastropub kombucha lomo pour-over mixtape ennui keffiyeh migas. Mixtape bushwick raclette, palo santo kitsch hashtag activated charcoal cliche slow-carb portland. Typewriter helvetica kinfolk gochujang. Raclette normcore marfa, pitchfork artisan 8-bit iceland sartorial hell of. Bicycle rights adaptogen swag, four loko air plant offal disrupt coloring book occupy readymade franzen.";
    return view('hello', [
        'content' => $hipsum,
        'title' => 'Laravel Pro',
    ]); // $content
});


Route::get('/todos', function () {
    return view('todos');
});
