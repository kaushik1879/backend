<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginReg extends Model
{
    use HasFactory;
    protected $table = 'loginreg';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
}
