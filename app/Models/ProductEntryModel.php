<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEntryModel extends Model
{
    use HasFactory;
    protected $tabel="product_entry_models";
    protected $filable=['category','pnameid','company','color','material','description','size','image','image1','image2','image3','image4','productstatus','price'];


    public function product_entry()
    {
      
        return $this ->belongsTo(ProductModel::class,'pnameid','id');

    }

}

