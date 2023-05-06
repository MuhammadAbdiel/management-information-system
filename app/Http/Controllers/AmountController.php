<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;

class AmountController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Fund::latest()->first()
        ]);
    }
}
