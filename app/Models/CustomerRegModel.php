<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRegModel extends Model
{
    use HasFactory;
    protected $tabel="customer_reg_models";
    protected $filable=['name','address','city','mobile','dob','email','pass','status'];
}





