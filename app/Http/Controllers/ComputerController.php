<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Http\Resources\ComputerResource;;

use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ComputerResource::collection(
            Computer::orderBy('id_computer')->paginate(10)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComputerRequest $request)
    {
        $computer = Computer::create($request->validated());
        return (new ComputerResource($computer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        $computer->load('category');
        return response()->json($computer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComputerRequest $request, Computer $computer)
    {
        $computer->update($request->validated());
        return new ComputerResource($computer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $id = $computer->id_computer; // guardamos antes de borrar
        $computer->delete();

        return response()->json([
            'message' => "El registro con id_computer {$id} se eliminó correctamente."
        ], 200);
    }
}
