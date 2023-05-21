<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class EventParticipationController extends Controller
{
    public function index()
    {
        return view('event.participation.index', ['registrations' => []]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Event $event): View
    {
        $event = Event::inRandomOrder()->first();

        return view('event.participation.create')->with( ['participation' => Participation::create(['event' => $event])]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
    }


    public function show(Participation $registration)
    {
        return view('registration.create')->with( ['registration' => Participation::create(['event' => 0])]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Participation $registration
     *
     * @return Response
     */
    public function edit(Participation $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @param \App\Models\Participation $registration
     *
     * @return Response
     */
    public function update(Request $request, Participation $registration)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Participation $registration
     *
     * @return Response
     */
    public function destroy(Participation $registration)
    {
        //
    }
}
