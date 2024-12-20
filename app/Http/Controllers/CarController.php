<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index(){
        $cars = Car::where("user_id",Auth::user()->id)->get();
        return view("cars.index", compact("cars"));
    }

    public function store(Request $req, Car $car){
        $data = $req->validate([
            "user_id"=>"",
            "name"=>"",
            "make"=>"",
            "model"=>""
        ]);

        $car->create($data);

        return redirect()->route("cars.index");
    }

    public function createPage(){
        return view("cars.store");
    }
}
