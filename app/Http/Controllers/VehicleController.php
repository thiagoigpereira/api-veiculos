<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = Vehicle::all();
        return response()->json($vehicle, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->vehicle = new Vehicle([
            'vehicle' => $request->json()->get('vehicle'),
            'model' => $request->json()->get('model'),
            'year' => $request->json()->get('year'),
            'description' => $request->json()->get('description'),
            'sold' => $request->json()->get('sold')
        ]);

        try {
            $this->vehicle->save();
            return response()->json('Veiculo inserido com sucesso', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return response()->json(array('vehicle' => $vehicle), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->vehicle = $request->json()->get('vehicle');
        $vehicle->model = $request->json()->get('model');
        $vehicle->year = $request->json()->get('year');
        $vehicle->description = $request->json()->get('description');
        $vehicle->sold = $request->json()->get('sold');
        try {
            $vehicle->save();
            return response()->json('Veiculo atualizado com sucesso', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        try {
            $vehicle->delete();
            return response()->json('Veiculo deletado com sucesso', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), $e->getCode());
        }
    }
}
