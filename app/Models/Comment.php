<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function comment_list(){
        return $this->hasOne(CommentList::class, "comment_id", "id");
    }
}
