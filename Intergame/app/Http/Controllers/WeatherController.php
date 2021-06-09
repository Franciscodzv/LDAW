<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;
Use \Carbon\Carbon;
class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q=queretaro&appid=dd21f0e46cadbf0f20cc24a22e2aca97");
        //Devolver el resultado como un arreglo de PHP
        $weather= $response->json();
        $date= Carbon::now()->toDateString();
        $porciones = explode(" ", $date);
        //$date = $porciones[0] .  $porciones[1]  ; 
         
        return view("weather", ["weather" => $weather,"date"=> $porciones[0]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
