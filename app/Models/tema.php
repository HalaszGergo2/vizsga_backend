<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    protected $primaryKey = "id";

    protected $fillable = [
        "temanev"
    ];
}
