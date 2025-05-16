<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherModel extends Model
{
    use HasFactory;
    protected $table = 'teacher';
    protected $primaryKey = 'nik';
    protected $keyType = 'string';
    public $incrementing = false;
}
