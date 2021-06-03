<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Preferences;

//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
            'user_id'=>$request->input('user_id'),
            'title_id'=>$request->input('title_id')
        ];
       /*var_dump($result);
        die();*/
       if(Preferences::createTitulosInteres($result)){
           return ['success'=>1];
       } 

         return ['success'=>0];
      
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
