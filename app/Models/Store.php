<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name','time_open'];


    public function stalls()
    {
        return $this->hasMany('App\Models\Stall');
    }

}
