<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularPlace extends Model
{
    use HasFactory;
    public function homestay(){
        return $this->belongsTo(Homestay::class, "homestay_id", "id");
    }
}
