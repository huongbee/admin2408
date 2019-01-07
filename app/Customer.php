<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // https://github.com/huongnguyen08/admin

    function billDetail(){
        return $this->hasManyThrough('App\BillDetail','App\Bill','id_customer','id_bill');
    }
}
