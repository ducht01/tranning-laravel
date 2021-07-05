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

Route::get('/hello', function() {
    return 'Hello world';
});

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
       echo "hd";
    });
    Route::get('product', function () {
        echo "product";
     });
});

Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

// xử lí khi resquests quá nhiều lần
Route::middleware('throttle:5,1')->group(function () {
    Route::get('api/user', function () {
        echo "hd";
    });
});

Route::get('demo', function () {
    return view('home');
});

Route::get('age/{age}', function ($age) {
    return $age;
})->middleware('CheckAge');

Route::get('check-role', function () {
    return 'Body post';
})->middleware('role:editor');

use Illuminate\Http\Request;
Route::get('/foo/bar', function (Request $request) {
    return $request->path();
});

Route::get('/method', function (Request $request) {
    echo "Current method : ".$request->method(). "noois";
    if ($request->isMethod('post')) {
        echo 'This is GET method HTTP';
    }
});

Route::get('view-request', 'FormController@show');
Route::post('post', 'FormController@post');

Route::get('avatar', 'FormController@avatar');
Route::post('upload', 'FormController@process_avartar')->name('upload');

// Route::get('posts', [PostController::class, 'index']);

// controller
Route::get('/dashboard', 'ShowDashboard');
Route::resources([
    'posts'=> 'PostController',
    'photos' => 'PhotoController'
]);
Route::get('/download', function() {
    return response()->download('../resources/views/welcome.blade.php', 'other_name.php');
    });
