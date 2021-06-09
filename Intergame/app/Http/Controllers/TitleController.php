<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importar el model
use App\Models\Titulo;
use Illuminate\Support\Facades\Http;
Use \Carbon\Carbon;
class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title =Titulo::getTitles();
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q=queretaro&appid=dd21f0e46cadbf0f20cc24a22e2aca97");
        //Devolver el resultado como un arreglo de PHP
        $weather= $response->json();
        $date= Carbon::now()->toRfc850String();
        $porciones = explode(" ", $date);
        $date = $porciones[0]." ".$porciones[1]; 


        return view("home", ["titulos" => $title,"weather" => $weather,"date"=>  $date]);
        //return view('/home');
    }


    public function lista()
    {
        
        $title =Titulo::getTitles();
        return view("game.editarTitulos", ["titulos" => $title]);
        //return view('/home');
    }
    public function listaInteres()
    {
        
        $title =Titulo::getTitles();
        return view("game.titulosInteres", ["titulos" => $title]);
        //return view('/home');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
      $result=[
          'name'=>$request->input('name'),
          'genre'=>$request->input('genre'),
          'description'=>$request->input('description'),
          'image'=>$request->input('image')
      ];
     

       $r=Titulo::createTitle($result);
       if($r['success']==1){
           return redirect('/')->with('status','Titulo registrado con Exito');
       }

       /*$title =Titulo::getTitles();
        return view("home", ["titulos" => $title]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = Titulo::getTitle($id);

        return view("/game/infoTitulo", ["titulo" => $titulo]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        Titulo::deleteTitle($id);
        return redirect("/editarTitulos")->with('status','Titulo eliminado con exito');;
    }
}
