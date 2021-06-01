<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public $table = "offers";
    public $timestamps = false;
    protected $fillable=['id','comment','gameOwn_id','gameOffer_id'];

    public static function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function createOffer($result){
       
        $offer = Offer::create([
            'comment'=>'hola como estan',
            /*'genre'=>$result['genre'],*/
            'gameOwn_id'=>$result['gameOwn_id'],
            'gameOffer_id'=>$result['gameOffer_id']
        ])->save();
       
        return $offer;
        
    }

}
