<?php

namespace App\Models;

use App\Models\Order;
use App\Models\District;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cost',
        'department_id'
    ];

    public function districts(){
        return $this->hasMany(District::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

}
