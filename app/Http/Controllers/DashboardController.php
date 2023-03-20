<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return Inertia::render('Dashboard', [
            'items' => Item::query()
                ->when($request->input('searchTerm'), function ($query, $search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->OrWhere('description', 'like', '%' . $search . '%')
                        ->OrWhere('content_type', 'like', '%' . $search . '%');
                    $query->with('content');
                    }
                )
                ->when($request->input('catagory'), function ($query, $search) {
                    $query->where('content_type', $search);
                    $query->with('content');
                })
                ->oldest()->limit(10)->get(),
            'searchTerm' => $request->searchTerm,
            'itemCatagories' => Item::select('content_type')->groupby('content_type')->distinct()->get(),
            'catagory' => $request->catagory
        ]);
    }
}
