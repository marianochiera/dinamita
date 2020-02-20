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

route::get("/miPrimeraRuta", function (){
    return ("Cree mi primera ruta :)");
});

route::get("/esPar/{numero}", function ($numero){
    if ($numero%2 == 0){
        return ("es par")  ;
    } else {
        return ("no es par");
    }
});
route::get("/sumar/{numero1}/{numero2}/{numero3?}", function ($numero1,$numero2,$numero3 = 0){
    $suma = $numero1+$numero2+$numero3;
    return ($suma);
});

route::get("/peliculas", function (){

    $peliculas = [
        [
            "titulo" => "Batman",
            "rating" => 3.4
        ],
        [
            "titulo" => "Thor",
            "rating" => 9.4
        ],
        [
            "titulo" => "Hulk",
            "rating" => 4.4
        ],
        [
            "titulo" => "CapitanAmerica",
            "rating" => 36.4
        ]
    ];
//dd($peliculas);
    return view("peliculas",compact("peliculas","rating"));
});

route::get("/peliculas/{id}", function($id){
    return view("detallePelicula");
});
