<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index(){
        $requests = ModelsRequest::where("user_id",Auth::user()->id)->get();
        // $cars = Car::where("user_id",Auth::user()->id)->get();
        return view("requests.index",compact("requests"));
    }

    public function store(Request $req, ModelsRequest $request){
        $data = $req->validate([
            "problem"=>"",
            "repair_data"=>"",
            "user_id"=>"",
            "car_id"=>"",
        ]);

        $request->create($data);

        return redirect()->route("requests.index");
    }

    public function createPage(){
        $cars = Car::where("user_id",Auth::user()->id)->get();
        return view("requests.store",compact("cars"));
    }
}
