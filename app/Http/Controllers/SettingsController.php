<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Trait\UploadImage;
use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;

class SettingsController extends Controller
{
    use UploadImage;
    public function index()
    {
        return view('dashboard.settings');
    }
    public function update(SettingRequest $req, Setting $setting)
    {
        $validetedData = $req->validated();
        if ($req->hasFile('logo')) {
            $validetedData['logo'] = $this->uploadImage('logo', $req->file('logo'), "images/settings");
        }
        if ($req->hasFile('favicon')) {
            $validetedData['favicon'] = $this->uploadImage('favicon', $req->file('favicon'), "images/settings");
        }


        $setting->update($validetedData);
        return redirect()->route('dashboard.settings.index');
    }
}
