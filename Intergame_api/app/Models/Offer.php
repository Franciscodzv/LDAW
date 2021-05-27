<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public $table = "offers";
    public $timestamps = false;

    public static function user()
    {
        return $this->belongsTo(User::class);
    }
}
