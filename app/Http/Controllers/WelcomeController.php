<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Inertia\Inertia;
use Inertia\Response;

class WelcomeController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Welcome', [
            'VERSION' => Application::VERSION,
            'PHP_VERSION' => PHP_VERSION
        ]);
    }
}
