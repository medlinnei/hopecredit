<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersFamily extends Model
{
    use HasFactory;
    protected $fillable = [
        'education', 'marital_status',
        'number_of_children', 'whose_name', 'whose_person', 'whose_number'
    ];
}
