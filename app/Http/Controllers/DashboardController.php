<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard(): View
    {
        $user = User::find(Auth::id());
        $transactions = $user->transactions()->latest()->get();

        return view('dashboard', compact('user', 'transactions'));
    }
}
