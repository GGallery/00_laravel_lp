<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_token',
        'text_data',
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;
}
