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
    //print_r($_POST['item']);
    foreach ($_POST['item'] as $key => $value)
    {
    $settings=Settings::find(intval($value));
        $settings->settings_must=intval($key);
        $settings->save();
    }
    echo true;
    }
    public function destroy($id){
       
        $settings = Settings::find($id);
        if ($settings->delete()) {
            return back()->with('success', 'İşlem Başarılı');
        }

        return back()->with('error', 'İşlem Başarısız');
    }
    public function edit($id)
    {
        $settings=Settings::where('id',$id)->first();
        return view('backend.settings.edit')->with('settings', $settings);
    }

    public function update(Request $request, $id){
        if ($request->hasFile('setting_value')) {
            $request->validate([
                'setting_value' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);
        }

        $settings=Settings::where('id', $id)->update([
            "settings_value" => $request->settings_value
        ]);
        if ($settings) {
            return back()->with("success","basarili");

        }
        return back()->with("error","basarisiz");
    }
}
