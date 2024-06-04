<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddtocartModel extends Model
{
    use HasFactory;
    protected $table="addtocart_models";
    protected $fillable=['productid','userid','qty','pprice','billno','pstatus','feedbacktitle','feedbackdesc','feedbackdate','feedbackimage']; 

}
