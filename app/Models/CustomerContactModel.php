<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerContactModel extends Model
{
    use HasFactory;
    protected $table="customer_contact_models";
    protected $fillable=['fname','emailid','phoneno','productname','desc','customerid','reply'];
}
