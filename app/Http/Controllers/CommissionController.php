<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommissionController extends Controller
{
    public function getCommissions()
    {
        $commissions = Commission::with('buyer', 'creator')->where('creator_id', auth()->user()->id)->get()->sortByDesc('created_at');
        $overdue = $commissions->where('status', 'Overdue');
        $active = $commissions->where('status', 'Active');
        $pending = $commissions->where('status', 'Pending');
        $disputed = $commissions->where('status', 'Disputed');
        $completed = $commissions->where('status', 'Completed');
        $history = $commissions->where('status', 'History');
        $history->join($commissions->where('status', 'Canceled'));
        $history->join($commissions->where('status', 'Refunded'));

        return [
            'commissions' => $commissions,
            'overdue' => $overdue,
            'active' => $active,
            'pending' => $pending,
            'disputed' => $disputed,
            'completed' => $completed,
            'finished' => $history
        ];
    }

    public function list()
    {
        return Inertia::render('Commission/List', $this->getCommissions());
    }

    public function show(Commission $commission)
    {
        $props = $this->getCommissions();
        $props['commission'] = $commission;
        return Inertia::render('Commission/List', $props);
    }
}
