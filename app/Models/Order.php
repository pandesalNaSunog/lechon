<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_ids',
        'quantities',
        'freebie_ids',
        'user_id',
        'order_type',
        'delivery_address'
    ];

    public function scopeFilter($query, array $filters){
        if($filters['year'] ?? false){
            $query->where('created_at', 'like', request('year') . '%');
        }
    }
}
