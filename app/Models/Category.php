<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function photo(){
        return $this->hasOne(Photo::class, "category_id", "id");
    }
    public function comment_list(){
        return $this->hasOne(Photo::class, "category_id", "id");
    }
}
