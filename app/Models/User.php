<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\UserAddress;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = ['mobile_number','otp','verified_status','isd_code'];
    protected $appends = ['full_number'];
    
    public function userAddress()
    {
        return $this->hasOne('App\Models\UserAddress', 'user_id', 'id');
    }
    
    public function getFullNumberAttribute() // notice that the attribute name is in CamelCase.
    {
        return '+'.$this->isd_code.$this->mobile_number;
    }
}











