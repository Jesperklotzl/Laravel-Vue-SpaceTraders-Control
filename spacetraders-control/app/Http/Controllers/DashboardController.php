<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\SpaceTradersService;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        // Always get the first user (you)

        $user = User::first();
        $token = $user?->spacetraders_token;

        $stats = null;
        if ($token) {
            $service = new SpaceTradersService($token);
            $stats = [
                'agent' => $service->getAgent(),
                'ships' => $service->getShips(),
            ];
        }

        return Inertia::render('Dashboard', [
            'stats' => $stats,
            'loggedIn' => Auth::check(),
        ]);
    }
}
