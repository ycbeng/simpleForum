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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/report',function(){
    return view('report');
});

Route::get('/search',function(){
    return view('search');
});

Route::get('/searchcar',function(){
    return view('searchcar');
});

Route::get('/forum',[
    'uses'=>'ForumsController@index',
    'as'=>'forum'
]);

Route::get('/discuss', function () {
    return view('discuss');
});

Route::get('discussion/{id}', [
    'uses' => 'DiscussionController@show',
    'as' => 'discussion'
]);

Route::get('channel/{slug}', [
    'uses' => 'ForumsController@channel',
    'as' => 'channel'
]);

Route::get('/upload',function(){
    return view('uploadAvatar');
});

Route::post('/uploaded',[
    'uses'=>'DiscussionController@upload',
    'as'=>'upload.image'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Group(['middleware'=>'auth'],function(){
    Route::resource('channels','ChannelsController');

    Route::get('discussions/create', [
        'uses' => 'DiscussionController@create',
        'as' => 'discussions.create'
    ]);

    Route::post('discussions/store', [
        'uses' => 'DiscussionController@store',
        'as' => 'discussions.store'
    ]);

    Route::post('/discussion/reply/{id}',[
        'uses' =>'DiscussionController@reply',
        'as' => 'discussion.reply'
    ]);

    Route::get('/reply/like/{id}', [
        'uses' => 'RepliesController@like',
        'as' => 'reply.like'
    ]);

    Route::get('/reply/unlike/{id}', [
        'uses' => 'RepliesController@unlike',
        'as' => 'reply.unlike'
    ]);

    Route::get('/discussion/watch/{id}', [
        'uses' => 'WatchController@watch',
        'as' => 'discussion.watch'
    ]);

    Route::get('/discussion/unwatch/{id}', [
        'uses' => 'WatchController@unwatch',
        'as' => 'discussion.unwatch'
    ]);


    Route::get('/discussion/best/reply/{id}',[
        'uses' => 'RepliesController@best_answer',
        'as' => 'discussion.best.answer'
    ]);
    
});


