<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'id_order', 'id_masakan', 'keterangan', 'status_detail_order',
    ];

    protected $table = 'detail_order';

    protected $primaryKey = 'id_detail_order';
}
