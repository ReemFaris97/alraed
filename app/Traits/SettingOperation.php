<?php

namespace App\Traits;

use App\Setting;
use App\Settingimage;
use App\Settings;
use Illuminate\Http\Request;
use Alert;
use DB;
trait SettingOperation
{

    /**
     * Update Existing Setting
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function RegisterSetting(Request $request){
        $data = $request->all();
        foreach ($data as $key => $value) {
            if($key == '_token' || !$value) continue;
            {
//                dd($value);
                Settings::where(['name'=> $key])->update(['ar_value' => $value[0],'en_value'=>(isset($value[1]))?$value[1]:$value[0]]);
            }

        }
    }

}
