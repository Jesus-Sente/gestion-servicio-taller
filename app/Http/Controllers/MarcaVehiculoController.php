<?php

namespace App\Http\Controllers;

use App\Models\MarcaVehiculo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MarcaVehiculoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MarcaVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $marcaVehiculos = MarcaVehiculo::paginate();

        return view('marca-vehiculo.index', compact('marcaVehiculos'))
            ->with('i', ($request->input('page', 1) - 1) * $marcaVehiculos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $marcaVehiculo = new MarcaVehiculo();

        return view('marca-vehiculo.create', compact('marcaVehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MarcaVehiculoRequest $request): RedirectResponse
    {
        MarcaVehiculo::create($request->validated());

        return Redirect::route('marca-vehiculos.index')
            ->with('success', 'MarcaVehiculo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $marcaVehiculo = MarcaVehiculo::find($id);

        return view('marca-vehiculo.show', compact('marcaVehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $marcaVehiculo = MarcaVehiculo::find($id);

        return view('marca-vehiculo.edit', compact('marcaVehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MarcaVehiculoRequest $request, MarcaVehiculo $marcaVehiculo): RedirectResponse
    {
        $marcaVehiculo->update($request->validated());

        return Redirect::route('marca-vehiculos.index')
            ->with('success', 'MarcaVehiculo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        MarcaVehiculo::find($id)->delete();

        return Redirect::route('marca-vehiculos.index')
            ->with('success', 'MarcaVehiculo deleted successfully');
    }
}
