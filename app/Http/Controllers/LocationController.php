<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->view('location.index', ['locations' => Location::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = new Location([
            'max_players' => '20',
            'country'     => 'Österreich',
        ]);

        return response()->view('location.create', [
            'location' => $location,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreLocationRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationRequest $request)
    {
        $location = new Location($request->validated());
        // $location->fill(GeoLocater::locate(collect($location)->pluck(['address', 'zipcode', 'city'])));
        $location->save();

        return response()->view('location.show', [$location]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Location $location
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return response()->view('location.show', [$location]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Location $location
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        return response()->view('location.edit', [$location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateLocationRequest $request
     * @param \App\Models\Location                     $location
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        $location->fill($request->validated());

        if (collect($location->getDirty())->contains(['longitude', 'latitude'])) {
            // $location->fill(GeoLocator::locate(collect($location)->pluck(['address', 'zipcode', 'city'])));
            ;
        }
        $location->save();

        return response()->view('location.show', [$location]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Location $location
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        if ($location->events()->count()) {
            $location->hidden = true;
        }
        $location->delete();
        return response()->view('location.index', [$location]);
    }
}
