<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qt extends Model
{
    protected $table = 'qts';
    protected $primaryKey = 'Qid';

    protected $fillable = [ 'Qid','Itemname','Quantity','Price','Tax','Total','created_at', 'updated_at']; 
}
