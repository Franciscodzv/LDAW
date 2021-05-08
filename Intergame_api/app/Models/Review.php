<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

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
}
