<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = [
        // Asigna los campos que queremos deshabilitar para una asignacion masiva
        'id',
        'created_at',
        'updated_at'
    ];

    //Relacion uno a muchos
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //Relaion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
