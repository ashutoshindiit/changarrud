<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
     use HasFactory;
     protected $table    = 'order_addresses';
     protected $fillable = ['order_id','user_id','name','isd_code','mobile_number','pincode','city','address'];
     protected $appends = ['full_number'];
     
    public function getFullNumberAttribute() // notice that the attribute name is in CamelCase.
    {
        return '+'.$this->isd_code.$this->mobile_number;
    }
}
