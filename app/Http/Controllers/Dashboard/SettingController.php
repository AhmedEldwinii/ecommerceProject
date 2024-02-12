<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingUpdateRequest;
use App\Models\Setting;
use App\Utils\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index(){
        return view("dashboard.settings.index");
    }



    public function update(SettingUpdateRequest $request , Setting $setting){

        $setting->update($request->validated());

        if ($request->has("logo")){
            ImageUpload::uploadImage($request->logo);
        };






        // $imagename = date("y-m-d"). '.' . $request->logo->extension();
        // $logo = Image::make($request->logo->path());
        // $logo->fit(200, 200, function ($constraint) {
        //     $constraint->upsize();
        // })->stream();
        // Storage::disk('public')->put($imagename,$logo);

        // $setting->update(['logo' => 'public/'.$imagename ]);


        // return redirect()->route("dashboard.settings.index")->with("success","Update Settings");
    }
}
