<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class szavak extends Model
{
    protected $primaryKey = "id";

    protected $fillable = [
        "angol",
        "magyar",
        "temaId",
    ];

    public function tema(){
        return $this->belongsTo(tema::class, 'temaId', 'id');
    }
}
