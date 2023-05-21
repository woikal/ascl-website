<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role $capacity
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Role $capacity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role $capacity
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $capacity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest $request
     * @param \App\Models\Role                      $capacity
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $capacity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Role $capacity
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $capacity)
    {
        //
    }
}
