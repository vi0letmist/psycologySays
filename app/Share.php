<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $table = 'share';
    public $primaryKey = 'id_s';
    public $timestamps = true;

    public function users() {
    	return $this->belongsTo('App\User');
    }
}
