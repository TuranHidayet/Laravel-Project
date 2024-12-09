<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function update(SettingRequest $request)
    {
        $validated = $request->validated();

        $setting = Setting::first();

        if($request->hasFile('about_image')){
            Storage::delete($setting->about_image);
            $validated['about_image'] = Storage::putFile('upload/settings', $request->file('about_image'));
        }

        if($request->hasFile('slider_image')){
            Storage::delete($setting->slider_image);
            $validated['slider_image'] = Storage::putFile('upload/settings', $request->file('slider_image'));
        }

        if($request->hasFile('set_image')){
            Storage::delete($setting->set_image);
            $validated['set_image'] = Storage::putFile('upload/settings', $request->file('set_image'));
        }


        if($setting){
            $setting->update($validated);
        }else{
            Setting::create($validated);
        }

        return redirect()->back()->with('success', 'Setting updated successfully' );
    }
}
