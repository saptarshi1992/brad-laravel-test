<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/jobs', function () {
    return "<h1> NO Jobs </h1>";
})->name('jobs');
Route::get('/test', function () {
    $url = route('jobs');
    return '<a href=' . $url . '>click</a>';
});
// Route::match(
//     ['get', 'post'],
//     '/submit',
//     function () {
//         return "submitted";
//     }
// );
Route::get('api/user', function () {
    return ['name' => 'john doe', 'email' => 'john@gmail.com'];
});
Route::get('/user-data/{id}/comments/{comment_id}', function (string $id, string $commnet_id) {
    return "user-id::" . $id . " comment-id::" . $commnet_id;
});
Route::get('/use', function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header()
    ];
});
Route::get('/user-data', function (Request $request) {
    return $request->all();
});
Route::get('/error', function () {
    return response("<h1>error</h1>", 404);
});
Route
    ::get
    ('/user-new', function () {
        return response()->json(['name' => 'saptarshi'])->cookie('name','saptarshi');
    });
Route::get('/get-cookie', function (Request $request) {
    $cookieValue = $request->cookie('name');
    return response()->json(['name' => $cookieValue]);
});
