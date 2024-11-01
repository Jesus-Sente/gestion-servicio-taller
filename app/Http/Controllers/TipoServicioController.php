<?php

namespace App\Http\Controllers;

use App\Models\TipoServicio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoServicioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipoServicios = TipoServicio::paginate();

        return view('tipo-servicio.index', compact('tipoServicios'))
            ->with('i', ($request->input('page', 1) - 1) * $tipoServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoServicio = new TipoServicio();

        return view('tipo-servicio.create', compact('tipoServicio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoServicioRequest $request): RedirectResponse
    {
        TipoServicio::create($request->validated());

        return Redirect::route('tipo-servicios.index')
            ->with('success', 'TipoServicio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoServicio = TipoServicio::find($id);

        return view('tipo-servicio.show', compact('tipoServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoServicio = TipoServicio::find($id);

        return view('tipo-servicio.edit', compact('tipoServicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoServicioRequest $request, TipoServicio $tipoServicio): RedirectResponse
    {
        $tipoServicio->update($request->validated());

        return Redirect::route('tipo-servicios.index')
            ->with('success', 'TipoServicio updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipoServicio::find($id)->delete();

        return Redirect::route('tipo-servicios.index')
            ->with('success', 'TipoServicio deleted successfully');
    }
}
