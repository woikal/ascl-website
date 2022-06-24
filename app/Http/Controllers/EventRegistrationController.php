<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class EventRegistrationController extends Controller
{
    public function index()
    {
        return view('event.registration.index', ['registrations' => []]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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


    public function show(Registration $registration)
    {
        return view('registration.create')->with( ['registration' => Registration::create(['event' => 0])]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Registration $registration
     *
     * @return Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Registration $registration
     *
     * @return Response
     */
    public function update(Request $request, Registration $registration)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Registration $registration
     *
     * @return Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
