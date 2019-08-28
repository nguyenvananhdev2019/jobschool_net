<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address_XA extends Model
{
    protected $table = 'devvn_xaphuongthitran';
    protected $primaryKey = 'xaid';
    
    public static function HUYEN() {
        return $this->belongsTo('App\address_HUYEN', 'maqh', 'maqh');
    }
    public static function TINH() {
        return $this->belongsToMany('App\address_TINH', 'App\address_HUYEN', 'matp', 'maqh');
    }
}
