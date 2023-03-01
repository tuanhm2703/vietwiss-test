<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() {
        $settings = Setting::all();
        return view('admin.pages.setting.index', compact('settings'));
    }

    public function store(Request $request) {
        Setting::create($request->all());
        return redirect()->back();
    }

    public function update(Setting $setting, Request $request) {
        $setting->update($request->all());
        return redirect()->back();
    }

}
