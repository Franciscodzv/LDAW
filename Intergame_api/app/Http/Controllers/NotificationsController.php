<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationsController extends Controller
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
        $result = [];
        $users = DB::table('games')
        ->join('offers','offers.gameOwn_id', '=', 'games.id')
        ->join('titles','titles.id', '=', 'games.title_id')
        //->select('games.condition','offers.gameOwn_id','offers.gameOffer_id','titles.name')
        //->select('offers.id')
        //->where('f.gameOwn_id','=','g.id')
        ->where('games.user_id','=',$id)
        ->get();
        

        $result2 = [];
        foreach($users as $user){

            $userA = [
                "id" => $user->id,
                "condition" => $user->condition,
                "name" => $user->name,
            ];

            $result[$user->id] = $userA;
            $result2[$user->id] = $userA;
            $id_oferta=DB::table('offers')->where("gameOwn_id","=", $user->gameOwn_id)
            ->where("gameOffer_id","=",$user->gameOffer_id)->select('id')->get();
           // var_dump( $id_oferta);die();
            $result2[$user->id] +=  ["id_oferta" =>$id_oferta[0]->id];


        }
        $result['own'][]=$result;

        foreach($users as $user){

            $userArray = [
                DB::table('games')
                ->join('titles','titles.id', '=', 'games.title_id')
                ->select('games.condition','titles.name','games.id')
                ->where('games.id','=',$user->gameOffer_id)
                ->get()
            ];
        // var_dump($userArray[0][0]->condition);  
       //   die();
        $result2[$user->id]+=["condicionOfrecida" => $userArray[0][0]->condition];
        $result2[$user->id]+=["nombreOfrecido" => $userArray[0][0]->name];
            $result['offered'][] = $userArray;

        }

        return $result2;
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
        return $deletedRows = DB::table('offers')->where('id', $id)->delete();
    }
}
