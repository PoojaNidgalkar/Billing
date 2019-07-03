<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qt extends Model
{
    protected $table = 'qts';
    protected $fillable = [ 'qid','Item_name','quantity','price','tax','total']; 
}
