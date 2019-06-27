<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'Cid';
    protected $fillable = ['name', 'address', 'contact', 'created_at', 'updated_at' ]; 
    
}