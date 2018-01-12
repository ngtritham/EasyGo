<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';

    protected $fillable = [
        'content', 'id_author', 'id_ward_cur', 'id_district_cur',
        'id_ward_next',
        'id_district_next',
        'id_accept', 'state'
    ];
}
