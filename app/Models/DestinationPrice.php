<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationPrice extends Model
{
    use HasFactory;
    public function destination(){
        return $this->belongsTo(Destination::class, "destination_id", "id");
    }
}
