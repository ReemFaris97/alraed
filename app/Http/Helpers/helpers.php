<?php


function api()
{
    return auth('api');
}

/**
 * Setting Name
 * @param $name
 * @return mixed
 */
function getsetting($name)
{
    $setting = \App\Settings::where('name', $name)->first();
    if (!$setting) return "";
    return $setting->value();
}

/**
 * Upload Path
 * @return string
 */
function uploadpath()
{
    return 'photos';
}

function user()
{
    return auth()->user();
}

function roles($name = null){
    $arr = [
        'admin'=>'مشرف',
        'user'=>'مستخدم',
        'delivery'=>'توصيل'
    ];

    if ($name != null)
        return $arr[$name];

    return $arr;
}

/**
 * Get Image
 * @param $filename
 * @return string
 */
function getimg($filename)
{
    $base_url = url('/');
    return $base_url . '/storage/' . $filename;
}

function getLang($collection, $target)
{
    if (app()->getLocale() == 'en') {
        return $collection['en_' . $target];
    } else {
        return $collection['ar_' . $target];
    }
}

/**
 * Upload an image
 * @param $img
 */
function uploader($request, $img_name)
{
    $path = \Storage::disk('public')->putFile(uploadpath(), $request->file($img_name));
    return $path;
}

function deleteImg($img_name)
{
    \Storage::disk('public')->delete(uploadpath(), $img_name);
    return True;
}
function percentage($first, $second){
    $pre=-$first + $second;
    if($first==0){
        $pre=$pre / 1 ;
    }else
    {$pre=$pre/ $first*100;}
    return $pre;
}

function status()
{
    $array = [
        '1' => 'مفعل',
        '0' => 'غير مفعل',
    ];
    return $array;
}


function cartStatus(){
    $cart = [
        'prepared'=>'تم تجهيز الطلب',
        'on_processing'=>'جارى تجهيز الطلب',
        'not_received'=>'لم يتم استلام الطلب',
        'received'=>'تم استلام الطلب',
        'refused'   =>  'تم الرفض'
    ];
//    $cart = ['accepted','on_delivery','refused'];
    return $cart;
}

function send_message()
{
    $options = array(
        'message' => '',
        'number' => '',
        'sender' => '',
        'unicode' => '',
        'return' => ''
    );

    $headers = array(
        'Authorization: key=AAAAk6lowFA:APA91bHGrGBDapUy8SsD95ipWTFmiUXpB6B1zEjILpcH6hDw6X2dx0nosuVZtTis1l7J2hzEp5662tKnSQdWnXarNIQ3Jar-14ywJWPex6uZLNFo7N8WtrbaYBy1orEBWkHvag1Ao2Eg',
        'Content-Type: application/json'
    );


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($options));
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function users()
{
    $cities = App\User::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['name']];
    });
    return $cities;
}

function perm($name)
{
    return \App\Permission::whereName($name)->first()->id;
}


function setting($name)
{
    return getLang(\App\Setting::where('name', $name)->first(),'value');
}


function countries()
{
    $countries = App\Country::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $countries;
}

function categories()
{
    $countries = App\Category::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $countries;
}

function answers()
{
    $answers = App\Questionnaires::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['answer']];
    });
    return $answers;
}

function sub_categories()
{
    $subcategories = App\SubCategory::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $subcategories;
}

function popup($name)
{
    $ms = 5000;
    $types = ['success', 'warning', 'info', 'error', 'basic'];
    $crud = ['add', 'update', 'delete'];

    if (in_array($name, $crud)) {
        if ($name == 'add') {
            return alert()->success('تم الاضافه بنجاح')->autoclose($ms);
        } elseif ($name == 'update') {
            return alert()->success('تم التعديل بنجاح')->autoclose($ms);
        } elseif ($name == 'delete') {
            return alert()->success('تم الحذف بنجاح')->autoclose($ms);
        }
    }

    if (in_array(array_keys($name)[0], $types)) {
        $alert = array_keys($name)[0];
        return alert()->$alert(array_values($name)[0])->autoclose($ms);
    }


    if (array_keys($name)[0] == 'rules') {

        $validator = \Illuminate\Support\Facades\Validator::make(request()->all(), array_values($name)[0]);

        if ($validator->fails()) {
            alert()->error($validator->errors()->first())->autoclose($ms);
            return true;
        }
        return false;

    }


}


function multipleUploader($request, $img_name, $model, $options = [])
{
    foreach ($request->$img_name as $key => $item) {
        $photo = \Illuminate\Support\Facades\Storage::disk('public')->putFile(uploadpath(), $item);
        $items[$key] = $model->firstOrCreate([
            $img_name => $photo
        ], $options);
    }
}

function UniqueCode($code)
{
    return \App\Coupon::where('code', $code)->first();
}

function fcm_server_key()
{
    return 'AAAAdTgp7Lk:APA91bEdECFg296xuJhdtocpK6SIENoV8h3_vMF7zQSGwNeBv2bMhXOzOlMA_yXx6Z2Xv7ECEWnMZZYSK5xwoab0N77FkCs90st20QxR8gWKBsTbJbviu29YguAEiOzqnEQhTYBiDGuZ';
}

function checkimag($filename)
{
    if ($filename != null)
        return file_exists(public_path('storage/') . $filename);
    else
        return false;
}

function convert($words)
{
    $words = explode(' ', $words);
    $_word = '';

    if (count($words) > 1) {
        if (app()->getLocale() == 'ar') {
            $convert = $words;
            if (in_array('name', $convert) || in_array('description', $convert) || in_array('model', $convert)) {
                if (in_array('name', $convert))
                    $key = array_search('name', $convert);
                else if (in_array('description', $convert))
                    $key = array_search('description', $convert);
                else if (in_array('model', $convert))
                    $key = array_search('model', $convert);


                foreach ($convert as $k => $value) {
                    if ($convert[0] != 'name' || $convert[0] != 'description' || $convert[0] != 'model') {
                        if ($k == $key) {
                            $_word .= trans('lang.' . $convert[$key - 1]) . ' ';
                        } else if ($k == $key - 1) {
                            $_word .= trans('lang.' . $convert[$key]) . ' ';
                        } else {
                            $_word .= trans('lang.' . $value) . ' ';
                        }
                    } else {
                        foreach ($words as $word) {
                            $_word .= trans('lang.' . $word) . ' ';

                        }
                    }
                }
            } else {
                foreach ($words as $word) {
                    $_word .= trans('lang.' . $word) . ' ';

                }
            }

        } else {
            foreach ($words as $word) {
                $_word .= trans('lang.' . $word) . ' ';

            }
        }
    } else {
        foreach ($words as $word) {
            $_word .= trans('lang.' . $word) . ' ';

        }
    }

    return $_word;
}