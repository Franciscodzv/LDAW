<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use App\Models\Preferences;
use App\Models\Game;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       return Title::getAllTitles();
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
       if(Title::createTitle($result)){
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
    public function show($id){

        $title = Title::where("id",$id)->first();
       
        $output = [
            "id" => $title->id,
            "name" => $title->name,
            "reviews" => [],
            "genres" => [],
            "games" => [],
            "preferences" => [],
            "users" => [],
            "description" => $title->description,
            "image" => $title->image,
        ];

        foreach($title->reviews as $review){
            //$output["reviews"][] = $review->getReview($id);
            $output["reviews"] = DB::table("reviews as r")->select("r.description")
            ->where("r.title_id",$id) ->skip(0)->take(6)->get();

        }

        foreach($title->genres as $genre){
            $output["genres"]= $genre->getGenre($id);
        }
        
        
        
        $output["games"]=Game::where("title_id",$id)->get();
       
       
         foreach($output['games'] as $game){
            //$output["users"]=User::FindOrFail($game["user_id"]);
            $output["preferences"][$game["user_id"]]= Preferences::where("user_id",$game["user_id"])->get();
        }
        foreach($output['games'] as $game){
            //$output["users"]=User::FindOrFail($game["user_id"]);
            $output["users"][$game["user_id"]]= User::where("id",$game["user_id"])->get();
        }
        //$title=Title::FindOrFail($output["games"]->id);
   

        return $output;

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
        Title::where("id",$id)->delete();
        
    }
}
