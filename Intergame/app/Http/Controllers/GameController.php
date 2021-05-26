<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Importar el model
use App\Models\Titulo;
//Importar el model
use App\Models\Juego;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title =Titulo::getTitles();
        return view("game.registrarTitulo", ["titulos" => $title]);//aqui esta cambiado el de juego registra  un juego
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
            'title_id'=>$request->input('title_id'),
            'condition'=>$request->input('condition'),
        ];
       
  
        $r=Juego::createGame($result);
        if($r['success']==1){
            return redirect('/')->with('status','exito');
        }
         //return redirect('/')->with('status','fail');
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
