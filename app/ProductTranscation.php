<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTranscation extends Model
{

    protected $guarded = [];
    protected $table = 'product_transation';

    
    public function product(){
        return $this->belongsTo(Product::class);
    }
   
}
