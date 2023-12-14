<?php

use App\Models\Listing;
use Illuminate\Http\Request;
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
    return view("listings", [
        "heading" => "Latest Listings",
        "listings" => Listing::all()]);
});

Route::get('hello', function() {
    return response("Hello World", 200)
        ->header("Content-Type", "text/plain")
        ->header("X-Header-One", "Header Value")
        ->header("X-Header-Two", "Header Value");
});


Route::get('/posts/{id}', function($id){
    return response('Post ' . $id, 200);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    dd($request->name, $request->city);
});


Route::get('/listing/{listing}', function($id) {
    return view("listing", [
        "listing" => Listing::find($id)
    ]);
});
