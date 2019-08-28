<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address_HUYEN extends Model
{
    protected $table = 'devvn_quanhuyen';
    protected $primaryKey = 'maqh';

    public function XA() {
        return $this->hasMany('App\address_XA', 'maqh', 'maqh');
    }
}
