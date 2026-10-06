<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class GigApplicationController extends Controller
{
    public function index(): Response
    {
        // Hard-coded
        $applications = [
            ['id' => 1, 'bandName' => 'The Night Owls', 'preferredDate' => '2026-11-06', 'setLengthMinutes' => 45, 'status' => 'applied'],
            ['id' => 2, 'bandName' => 'Steelpan Collective', 'preferredDate' => '2026-11-13', 'setLengthMinutes' => 60, 'status' => 'in_review'],
            ['id' => 3, 'bandName' => 'Calypso Rising', 'preferredDate' => '2026-11-20', 'setLengthMinutes' => 30, 'status' => 'approved'],
        ];

        return Inertia::render('gig-applications/Index', [
            'applications' => $applications,
        ]);
    }
}
