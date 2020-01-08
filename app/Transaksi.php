<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'id_user', 'id_order', 'tanggal', 'total_bayar', 'id_masakan',
    ];

    protected $table = 'transaksis';

    protected $primaryKey = 'id_transaksi';  
}
