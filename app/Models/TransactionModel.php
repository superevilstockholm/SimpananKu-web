<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    protected $table = 'riwayat_transaksi';

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'type',
        'nominal',
        'keterangan'
    ];
}
