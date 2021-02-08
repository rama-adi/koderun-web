<?php

namespace App\Http\Controllers;

use App\Models\Scratchbook;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ScratchbookController extends Controller
{
    public function index(Request $request)
    {

    }

    public function create(Request $request)
    {
        Gate::authorize('create', Scratchbook::class);
        return view('dashboard.scratchbook.create');
    }

    public function edit(Scratchbook $scratchbook)
    {
        Gate::authorize('update', $scratchbook);
        return view('dashboard.scratchbook.edit', ['scratchbook' => $scratchbook]);
    }


    public function raw(Scratchbook $scratchbook)
    {
        Gate::authorize('view', $scratchbook);

        return response($scratchbook->code, 200, [
            'Content-Type' => 'text/plain'
        ]);
    }

    public function show_public(Team $team, $slug)
    {
        $scratchbook = Scratchbook::where('team_id', $team->id)->where('slug', $slug)->first();
        Gate::authorize('view', $scratchbook);

        $data = [
            'scratchbook' => $scratchbook,
            'team' => $team,
        ];

        if(\Auth::guest()){
            return view('dashboard.scratchbook.show-public-guest')->with($data);
        }else{
            return view('dashboard.scratchbook.show-public')->with($data);
        }
    }

    public function show_public_raw(Team $team, $slug)
    {
        $scratchbook = Scratchbook::where('team_id', $team->id)->where('slug', $slug)->first();
        Gate::authorize('view', $scratchbook);

        return response($scratchbook->code, 200, [
            'Content-Type' => 'text/plain'
        ]);
    }

}
