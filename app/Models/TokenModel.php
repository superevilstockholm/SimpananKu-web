<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TokenModel extends Model
{
    use HasFactory;

    protected $table = 'token';

    protected $fillable = [
        'user_id',
        'token',
    ];

    public $timestamps = false;
}
