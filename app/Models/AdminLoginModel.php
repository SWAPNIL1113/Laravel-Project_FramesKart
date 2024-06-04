<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLoginModel extends Model
{
    use HasFactory;
    protected $tabel="admin_login_models";
    protected $filable=['email','pass'];
}
