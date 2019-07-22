<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qt extends Model
{
    protected $table = 'qts';
    protected $primaryKey = 'Qid';
    protected $fillable = ['client_id','item_name','quantity','price','tax','total','Grandtotal','created_at','updated_at'];

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
