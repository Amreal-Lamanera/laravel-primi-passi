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
    $data = [
        'team' => [
            [
                'name' => 'Francesco',
                'surname' => 'Pieraccini',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore!'
            ],
            [
                'name' => 'Filippo',
                'surname' => 'Urriani',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore!'
            ],
            [
                'name' => 'Nigel',
                'surname' => 'Di Nella',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore!'
            ],
            [
                'name' => 'Alberto',
                'surname' => 'Dore',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore!'
            ],
            [
                'name' => 'Mirco',
                'surname' => 'Sansone',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore!'
            ],
            [
                'name' => 'Irinel',
                'surname' => 'Momoloaca',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, labore!'
            ],

        ]
    ];
    return view('home', $data);
});
