<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class ControladorTitulo extends Controller
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
            "description" => $title->description,
            "image" => $title->image,
        ];

        foreach($title->reviews as $review){
            $output["reviews"][] = $review->getReview($id);
        }

        foreach($title->genres as $genre){
            $output["genres"][] = $genre->getGenre($id);
        }

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
