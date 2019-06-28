<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qt extends Model
{
    protected $table = 'qts';
    protected $primaryKey = 'Qid';

    protected $fillable = ['Itemname','Quantity','Price','Tax','Total','Grandtotal','created_at', 'updated_at'];
   
}
