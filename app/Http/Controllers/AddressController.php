<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AddressController extends Controller
{
    public function index(): View
    {
        return view('addresses.index', ['addresses' => Address::all()]);
    }

    public function edit(Address $address): View
    {
        return view('addresses.edit', ['address' => $address]);
    }


    public function update(UpdateAddressRequest $request, Address $address): RedirectResponse
    {
        $address->save([$request->validated()]);

        return redirect()->route('addresses.index');
    }

    public function destroy(Address $address): RedirectResponse
    {
        $address->delete();

        return redirect()->route('addresses.index');
    }
}
