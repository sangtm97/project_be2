<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endow extends Model
{
    use HasFactory;

    protected $fillable = [
        'endow_name'
    ];
}
