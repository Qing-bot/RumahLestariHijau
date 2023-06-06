<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    public function destination_price(){
        return $this->hasMany(DestinationPrice::class, "destination_id", "id");
    }
}
