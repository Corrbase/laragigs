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
    return view('listings', [
        'heading' => 'lastes lisenings',
        'listings' => [
//            [
//            'id' => 1,
//            'title' => 'listing One',
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
//                                Consequatur cum doloribus earum, enim eveniet illum laudantium
//                                modi mollitia nemo odio optio provident quaerat quos rerum
//                                saepe sequi velit vitae voluptatem!'
//            ],
//            [
//                'id' => 2,
//                'title' => 'listing Two',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
//                                Consequatur cum doloribus earum, enim eveniet illum laudantium
//                                modi mollitia nemo odio optio provident quaerat quos rerum
//                                saepe sequi velit vitae voluptatem!'
//            ],
        ]
    ]);
});


//    Route::get('/hello', function (){
//        return response('<h1>hello world</h1>', 200)
//            ->header('Content-Type', 'text/plain')
//            ->header('foo', 'bar');
//    });
//
//    Route::get('/posts/{id}', function ($id){
//    //    dd($id); // die and dump
//    //    ddd($id); // die and dump all info
//
//        return response('Post ' .$id);
//    })->where('id', '[0-9]+');
//
//    Route::get('/search', function (\Illuminate\Http\Request $request){
//        dd($request->name . ' ' . $request->city);
//    });
