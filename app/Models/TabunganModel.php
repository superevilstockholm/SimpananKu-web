<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabunganModel extends Model
{
    protected $table = "tabungan";

    protected $primaryKey = "id";

    protected $fillable = [
        "user_id",
        "nominal"
    ];

    public $timestamps = false;
}
