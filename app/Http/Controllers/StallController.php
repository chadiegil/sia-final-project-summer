<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stall;

class StallController extends Controller
{
    public function index()
    {
        $stalls = Stall::all();


        return inertia('Product',[
            'stalls' => $stalls
        ]);

    }
}
