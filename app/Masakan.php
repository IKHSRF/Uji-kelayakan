<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masakan extends Model
{
    protected $fillable = [
        'nama_masakan', 'harga', 'status_masakan',
    ];

    protected $table = 'masakans';

    protected $primaryKey = 'id_masakan';
}
