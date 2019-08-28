<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address_TINH extends Model
{
    protected $table = 'devvn_tinhthanhpho';
    protected $primaryKey = 'matp';

    public function HUYEN() {
        return $this->hasMany('App\address_HUYEN', 'matp', 'matp');
    }
}
