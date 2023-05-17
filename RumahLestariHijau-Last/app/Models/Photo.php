<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    public function culinary(){
        return $this->belongsTo(Culinary::class, "table_id", "id");
    }
    public function homestay(){
        return $this->belongsTo(Homestay::class, "table_id", "id")->where("category_id", 2);
    }

}
