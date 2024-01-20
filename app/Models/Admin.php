<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name', 
        'email' ,
        'address',
        'password' ,
        'is_admin',
    ];

    // Accessor để tạo attribute 'name'
    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
