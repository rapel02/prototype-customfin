<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = "Transaction";
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }
    public function product() {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
