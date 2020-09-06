<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    //
    protected $primaryKey = ['user_id', 'stock_id'];
    public $incrementing = false;
}
