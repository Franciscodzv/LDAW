<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use \Carbon\Carbon;

class Review extends Model
{
    public $timestamps = false;
    protected $fillable=['date','user_id','title_id','description'];
    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getReview($id){

        //$books = self::all();
        $reviews = self::where("title", "=", $id)
        ->get();

        $result = [];

        foreach($reviews as $review){

            $reviewArray = [
                "date" => $review->date,
                "description" => $review->name,
                "name" => $review->user->name 
            ];


            $result[$review->id] = $reviewArray;

        }

        return $result;

    }

    public static function createReview($result){
       //dd($result);
        $title = Review::create([
            'title_id'=>$result['title_id'],
            'description'=>$result['description'],
            'user_id'=>$result['user_id'],
            'date'=> Carbon::now(),
        ]);
        return $title;
        
    }
}
