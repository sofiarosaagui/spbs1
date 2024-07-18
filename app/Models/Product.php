<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'price',
        'description',
        'existence',
        'image_1',
        'image_2',
        'image_3',
        'capability',
        'capability_type',
        'color',
        'type',
        'status',
        'supplier_id',
    ];


    
    // public function orders()
    // {
    //     return $this->hasMany(Order_detail::class);
    // }

    public function supplier()
    {
    return $this->belongsTo(Supplier::class);
    }
}
