<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $tabel="product_models";
    protected $filable=['product_name'];

    public function product()
    {
      
        return $this ->hasmany(ProductEntryModel::class,'pnameid','id');

    }

}
