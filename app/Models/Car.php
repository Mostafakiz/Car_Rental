<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'type', 'color', 'date', 'quantity', 'price', 'image'];
    protected $casts = [
        'image' => 'json',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
