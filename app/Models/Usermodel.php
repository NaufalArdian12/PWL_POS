<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermodel extends Model
{
    use HasFactory;

    protected $table = 'm_users';
    protected $primaryKey = 'user_id';
}
