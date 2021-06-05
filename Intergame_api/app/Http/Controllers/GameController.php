<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
use App\Models\Title;
class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
            'user_id'=>$request->input('user_id'),
            'title_id'=>$request->input('title_id'),
            'condition'=>$request->input('condition')
        ];
       if(Game::createGame($result)){
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
        /*var_dump( $id);
        die();*/
        $games = DB::table('games')->where('user_id', '!=', 1)->where('title_id', '=', $id)->get(); //todos los mario odyssey que esten registrados

        $title = Title::where('id',$id)->get(); //mande a la pantalla del juego que quieres

        $offers = DB::table('games')->join('titles','games.title_id', '=', 'titles.id')
                                      ->where('games.user_id', '=', 1)
                                      ->select('titles.name','games.id','games.condition')->get();

        $data = ["games" => $games, "title" => $title, 'offers'=> $offers];

        return $data;
        /*$games = DB::table('games')->where('user_id', '!=', $request->input('user_id'))->where('title_id', '=', $request->input('title_id'))->get(); //todos los mario odyssey que esten registrados

        

        $title = Title::where('id',$request->input('title_id'))->get(); //mande a la pantalla del juego que quieres

        $offers = DB::table('games')->join('titles','games.title_id', '=', 'titles.id')
                                      ->where('games.user_id', '=', $request->input('user_id'))
                                      ->select('titles.name','games.id','games.condition')->get();
        
        $data = ["games" => $games, "title" => $title, 'offers'=> $offers];
    
        return $data;*/
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
