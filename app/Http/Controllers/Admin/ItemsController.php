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
        return Inertia::render('Items/Index', [
            'items' => Item::query()->oldest()->limit(10)->get(),
        ]);
    }

    public function create(): Response
    {

    }

    public function store()
    {

    }

    public function edit(Item $item): Response
    {
        return Inertia::render('Items/Edit', [
            'item' => $item->load('content'),
        ]);
    }

    public function update(Item $item)
    {
        $item->forceFill(request()->only(['name', 'description']));

        switch($item->content_type) {
            case 'info':
                $item->content->header = request('content.header');
                $item->content->content = request('content.content');
                break;
            case 'download':
            case 'WEBLINK':
                $item->content->url = request('content.url');
                break;
        }

        $item->push();

        return redirect()->route('admin.items.index')->with('message', 'Successfully Updated Item');
    }
}
