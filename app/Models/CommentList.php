<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentList extends Model
{
    use HasFactory;
    public function comment(){
        return $this->belongsTo(Comment::class, "comment_id", "id");
    }
    public function culinary(){
        return $this->belongsTo(Culinary::class, "table_id", "id");
    }
    public function homestay(){
        return $this->belongsTo(Homestay::class, "table_id", "id");
    }
    public function category(){
        return $this->belongsTo(Category::class, "category_id", "id");
    }
}
