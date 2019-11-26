<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


$router->get('/', 'NewsController@indexNews');


$router->group(['prefix' => 'news', 'as' => 'news'], function () use ($router) {
    $router->get('/tambah', 'NewsController@tambah');
    $router->get('/index', 'NewsController@indexNews');
    $router->post('/create', 'NewsController@createNews');
    $router->post('/update', 'NewsController@updateNews');
    $router->get('/delete/{id}', 'NewsController@deleteNews');
    $router->get('/detail/{id}', 'NewsController@detailNews');
    $router->get('/view/{id}', 'NewsController@viewNews');
    
});

$router->group(['prefix' => 'comment', 'as' => 'comment'], function () use ($router) {
    $router->get('/tambah/{id}', 'CommentController@tambah');
    $router->post('/create', 'CommentController@createComment');
    $router->get('/delete/{id}', 'CommentController@deleteComment');
    $router->get('/detail/{id}', 'CommentController@detailComment');
    $router->get('/view/{id}', 'CommentController@viewComment');
    $router->post('/update', 'CommentController@updateComment');

});
