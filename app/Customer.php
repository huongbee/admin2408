<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $table = 'customers';
    
    function billDetail(){
        return $this->hasManyThrough('App\BillDetail','App\Bill','id_customer','id_bill');
    }
}
