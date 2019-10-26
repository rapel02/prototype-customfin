<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';

    public function transaction() {
        return $this->hasMany('App\Transaction');
    }
}
