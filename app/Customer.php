<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\City;
class Customer extends Model
{
    use SoftDeletes;

    public function city(){
        return $this->belongsTo(City::class);
    }
}


// $customer = Customer::find(10);
// SELECT * FROM cities WHERE id = $customer->city_id
