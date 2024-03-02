<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'region', 'district',
        'city', 'post_index',
        'street', 'house',
        'apartment', 'actual_address_differs'
    ];
}
