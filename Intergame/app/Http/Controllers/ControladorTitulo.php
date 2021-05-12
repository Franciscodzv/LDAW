<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importar el model
use App\Models\Titulo;

class ControladorTitulo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $title =Titulo::getTitles();
        return view("home", ["titulos" => $title]);
        //return view('/home');
    }


    public function lista()
    {
        
        $title =Titulo::getTitles();
        return view("game.editarTitulos", ["titulos" => $title]);
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
        $name=$request->name,
        $description=$request->description,
        $genre=$request->genre,
        $image=$request->description,
        ];
        Titulo::createTitle($result);

        $title =Titulo::getTitles();
        return view("home", ["titulos" => $title]);
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
        //
    }
}
