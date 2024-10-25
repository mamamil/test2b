<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create()
    {
        return view('suggestions.create');
    }

    public function store(SuggestionRequest $request)
    {
        Suggestion::create($request->validated());

        return redirect()->route('suggestions.create')
            ->with('success', 'Предложение успешно добавлено!');
    }
}
