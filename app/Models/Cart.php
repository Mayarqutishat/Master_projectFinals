<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cart extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id'
    ];

    protected $dates = ['deleted_at']; // Specifies the 'deleted_at' column

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
