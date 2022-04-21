<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ItemsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Dashboard', [
            'items' => Item::query()->oldest()->limit(10)->get(),
        ]);
    }

    public function create(): Response
    {

    }

    public function store()
    {

    }

    public function edit(): Response
    {

    }

    public function update()
    {

    }
}
