<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motive extends Model
{
    protected $table = 'motive';
    public $primaryKey = 'id_m';
    public $timestamps = true;
}
