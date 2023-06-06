<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;
    public function nearby_place(){
        return $this->hasMany(NearbyPlace::class, "homestay_id", "id");
    }
    public function popular_place(){
        return $this->hasMany(PopularPlace::class, "homestay_id", "id");
    }
    public function homestay_photo(){
        return $this->hasMany(HomestayPhoto::class, "homestay_id", "id");
    }
    public function comment_list(){
        return $this->hasMany(CommentList::class, "table_id", "id");
    }
}
