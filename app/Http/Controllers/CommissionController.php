<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommissionController extends Controller
{
    public function list()
    {
        $commissions = Commission::all();
        return Inertia::render('Commissions', ['commissions'=>$commissions]);
    }
}
