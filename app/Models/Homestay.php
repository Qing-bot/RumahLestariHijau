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
    public function photo(){
        return $this->hasMany(Photo::class, "table_id", "id")->where("category_id", '=', 2);
    }
    public function comment_list(){
        return $this->hasMany(CommentList::class, "table_id", "id");
    }
}
