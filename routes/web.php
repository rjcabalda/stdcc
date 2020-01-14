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
    return view('panel.home');
});
Route::get('/api/memberlist',[
    'uses' => 'Api\MemberController@index'
]);
Route::get('/api/store',[
    'uses' => 'Api\MemberController@store'
]);

    Route::get('/memberlist',[
        'uses' => 'MemberController@member_list',
        'as' => 'member.list'
    ]);
    Route::get('/addmember',[
        'uses' => 'MemberController@add_form',
        'as' => 'add_member'
    ]);
