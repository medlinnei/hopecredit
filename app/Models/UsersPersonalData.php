<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersPersonalData extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name',
        'name_father', 'birthday',
        'type_passport', 'episode_and_number',
        'number_passport', 'ipn'
    ];
}
