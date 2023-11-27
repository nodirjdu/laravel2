<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index()
    {
        $cars = DB::table('cars')->get();

        return view('cars.index', ['cars' => $cars]);
    }
    
    public function show($id)
    {
        $car = DB::table('cars')->where('id', $id)->first();
        return view('cars.show', ['car' => $car]);
        return $car;
        return "hehee " . $id;
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        DB::table('cars')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'year' => $request->year,
            'color' => $request->color,
        ]);
        return redirect()->route('cars.index');
    }

    public function destroy($id)

    {
        DB::table('cars')->where("id", $id )->delete();
        return redirect()->route('cars.index');
    }

}
