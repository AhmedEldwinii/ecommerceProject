<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view("dashboard.settings.index");
    }


    public function update(SettingUpdateRequest $request , Setting $setting){

        $setting->update($request->validated());
             return redirect()->route("dashboard.settings.index")->with("success","Update Settings");
    }
}
