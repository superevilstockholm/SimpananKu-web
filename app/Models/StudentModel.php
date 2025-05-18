<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentModel extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'nisn';
    protected $keyType = 'string';

    public $incrementing = false;
    public $timestamps = false;
}
