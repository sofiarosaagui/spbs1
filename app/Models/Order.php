<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function products()
    {
    return $this->hasMany(Order_detail::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class, 'user_id');
    }

//     public function client()
// {
//     return $this->belongsTo(Client::class, 'client_id');
// }


}
