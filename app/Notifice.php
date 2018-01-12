<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifice extends Model
{
    protected $table='notifices';

    protected $fillable = [
    	'id_post',
        'id_request', 'id_author'
    ];
}
