<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transcation extends Model
{

    protected $guarded = [];

    protected $primaryKey = 'invoices_number';
    public $incrementing = false;
    protected $keyType = 'string';

     public function productTranscation(){
        return $this->hasMany(ProductTranscation::class,'invoices_number','invoices_number');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
