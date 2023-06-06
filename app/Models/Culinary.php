<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culinary extends Model
{
    use HasFactory;
    public function comment_list(){
        return $this->hasMany(CommentList::class, "table_id", "id");
    }
    
}
