<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\Info;
use App\Models\Item;
use App\Models\Weblink;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AdminDashboardController extends Controller
{

    public function __invoke(Request $request): Response
    {
        return Inertia::render('Admin/Dashboard', [
            'info' => Info::query()->count(),
            'weblink' => Weblink::query()->count(),
            'download' => Download::query()->count(),
        ]);
    }
}
