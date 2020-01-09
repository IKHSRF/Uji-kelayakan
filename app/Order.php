<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id_order','no_meja', 'tanggal', 'id_user', 'keterangan', 'status_order', 'id_masakan',
    ];

    protected $table = 'orders';

    protected $primaryKey = 'id_order';   
}
