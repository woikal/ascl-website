<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTeamVisibilityRequest;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;

class TeamVisibilityController extends Controller
{

    public function update(UpdateTeamVisibilityRequest $request, Team $team): RedirectResponse
    {
        $team->update($request->validated());

        return redirect()->route('teams.index');
    }
}
