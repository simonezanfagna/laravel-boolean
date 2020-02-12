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
  return view('home',[
    'titolo' => 'Home'
  ]);
})->name('homepage');

Route::get('faq',function (){
  $data = [
    'listaFaqSx' => config('dati.faqsSx'),
    'listaFaqDx' => config('dati.faqsDx')
  ];
  return view('faq',[
    'titolo' => 'FAQ'
  ], $data);
})->name('paginaFaq');
