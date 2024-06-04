<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutModel extends Model
{
    use HasFactory;
    protected $tabel="checkout_models";
    protected $filable=['custname','address','custemail','mobileno','pincode','billno','custid','shippingtype','total','orderdate'];
}
