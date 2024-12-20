<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $requests = ModelsRequest::with(['user', 'car'])->get();
        return view("admin.index",compact("requests"));
    }

    public function updata(Request $req, ModelsRequest $request){
        $data = $req->validate([
            "problem"=>"",
            "repair_data"=>"",
            "user_id"=>"",
            "car_id"=>"",
        ]);

        $request->update($data);

        return redirect()->route("admin.index");
    }

    public function show(ModelsRequest $request){
        return view("admin.updata",compact("request"));
    }
}
