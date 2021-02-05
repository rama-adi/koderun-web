<?php

namespace App\Http\Controllers;

use App\Models\Scratchbook;
use App\Models\Team;
use Illuminate\Http\Request;

class ScratchbookController extends Controller
{
    public function index(Request $request)
    {

    }

    public function create(Request $request)
    {
        return view('dashboard.scratchbook.create');
    }

    public function show_public(Team $team, $slug)
    {
        $scratchbook = Scratchbook::where('team_id', $team->id)->where('slug', $slug)->first();
        \Gate::authorize('view', $scratchbook);

        return view('dashboard.scratchbook.show-public')->with([
            'scratchbook' => $scratchbook,
            'team' => $team,
        ]);
    }

    public function show_public_raw(Team $team, $slug)
    {
        $scratchbook = Scratchbook::where('team_id', $team->id)->where('slug', $slug)->first();
        \Gate::authorize('view', $scratchbook);

        return response($scratchbook->code, 200, [
            'Content-Type' => 'text/plain'
        ]);
    }

}
