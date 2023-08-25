<?php

namespace App\Models;

use App\Models\City;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    //Relacion uno a muchos
    public function cities(){
        return $this->hasMany(City::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
