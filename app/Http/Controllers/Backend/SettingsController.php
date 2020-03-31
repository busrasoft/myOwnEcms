<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $data['adminSettings']=Settings::all()->sortBy('settings_must');
        return view('backend.settings.index', compact('data'));
    }

    public function sortable(){
        foreach($_POST['item'] as $key => $value){
            $settings=Settings::find(intval($value));
            $settings->settings_must=intval($key);
            $settings->save();
        }
        echo true;
    }
}
