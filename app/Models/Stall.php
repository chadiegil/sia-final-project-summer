<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    use HasFactory;
    protected $fillable = ['store_id','stall_owner','product_name','price','description'];


    public function store()
    {
        return $this->belongsTo('App\Models\Store');
    }
}
