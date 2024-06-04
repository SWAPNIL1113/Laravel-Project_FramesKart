<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InquiryModel extends Model
{
    use HasFactory;
    protected $table="inquiry_models";
    protected $fillable=['fname','emailid','phoneno','productname','desc'];
}
