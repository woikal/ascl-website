<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use Illuminate\View\View;

class ParticipantController extends Controller
{
    public function index(): View
    {
        $participants = Participant::all();

        return view('participants.index', compact($participants));
    }

    public function create()
    {
        return view('participants.create');
    }

    public function store(StoreParticipantRequest $request)
    {
        $participant = Participant::make($request->validated());
        $participant->save();

        return redirect('participants.show')->with(compact($participant));
    }

    public function show(Participant $participant)
    {
        return view('participants.show', compact($participant));
    }

    public function edit(Participant $participant)
    {
        return view('participants.edit', compact($participant));
    }

    public function update(UpdateParticipantRequest $request, Participant $participant)
    {
        $participant->fill($request->validated());
        $participant->save();

        return redirect('participants.show')->with(compact($participant));
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();

        return redirect('participants.index');
    }
}
