<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'product_id', 'user_id', 'quantity', 'address', 'shipping_date'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
