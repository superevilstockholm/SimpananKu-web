<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nisn',
        'nik',
        'password',
        'dob',
        'email',
        'user_type'
    ];

    protected $hidden = ['password'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
