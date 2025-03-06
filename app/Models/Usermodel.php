<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Levelmodel;

class Usermodel extends Model
{
    use HasFactory;
    protected $table = 'm_users';
    protected $primaryKey = 'user_id';

    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    public function level()
    {
        return $this->belongsTo(Levelmodel::class, 'level_id', 'level_id');
    }
}
