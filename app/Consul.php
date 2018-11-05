<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consul extends Model
{
    protected $table = 'consul';
    public $primaryKey = 'id_c';
    public $timestamps = true;
}
