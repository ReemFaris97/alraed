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

function AccountStatus( $status= null)
{
    $array = [
        '1' => 'مفعل',
        '0' => 'غير مفعل',
    ];
    return $array[$status];
}


function PlayerPosition()
{
    $array = [
        'goal_keeper'=>'حارس مرمى',
        'defender'=>'مدافع',
        'mid_line'=>'خط وسط',
        'attacking'=>'مهاجم'
    ];
    return $array;
}
function Position($position= null)
{
    $array = [
        'goal_keeper'=>'حارس مرمى',
        'defender'=>'مدافع',
        'mid_line'=>'خط وسط',
        'attacking'=>'مهاجم'
    ];

    if($position == null)
    return $array;

    return$array[$position];
}

function permissions()
{
    $countries = App\Permission::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['title']];
    });
    return $countries;
}

function users()
{
    $users = App\User::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['name']];
    });
    return $users;
}

function assistants()
{
    $users = App\User::where('role','assistant')->get()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['name']];
    });
    return $users;
}


function setting($name)
{
    return getLang(\App\Settings::where('name', $name)->first(),'value');
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
    $categories = App\Category::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $categories;
}

function teams()
{
    $teams = App\Team::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $teams;
}


function champions()
{
    $champions = App\Champion::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_title']];
    });
    return $champions;
}

function players()
{
    $players = App\TeamPlayers::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $players;
}

function matches()
{
    $matches = App\Match::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $matches;
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

function actived($req)
{
    if (\Request::is($req)) {
        return 'activated';
    }
    return '';
}

function hasPermission($name)
{
    $permissions = auth()->user()->permissions()->get()->pluck('name')->toArray();
    if (in_array($name, $permissions)) {
        return true;
    }
    return false;
}

function getAllCountries()
{
    if (app()->getLocale() == 'en') {
        $countries = array("Saudi Arabia", "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Palestine","Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");    
    } else {
        
    
    $countries = [
    "SA" =>'المملكة العربية السعودية',
    "ET" =>'إثيوبيا',
    "AZ" =>'أذربيجان',
    "AM" =>'أرمينيا',
    "AW" =>'أروبا',
    "ER" =>'إريتريا',
    "ES" =>'أسبانيا',
    "AU" =>'أستراليا',
    "EE" =>'إستونيا',
    "AF" =>'أفغانستان',
    "IO" =>'إقليم المحيط الهندي البريطاني',
    "EC" =>'إكوادور',
    "AR" =>'الأرجنتين',
    "JO" =>'الأردن',
    "AE" =>'الإمارات العربية المتحدة',
    "AL" =>'ألبانيا',
    "BR" =>'البرازيل',
    "PT" =>'البرتغال',
    "BA" =>'البوسنة والهرسك',
    "GA" =>'الجابون',
    "DZ" =>'الجزائر',
    "DK" =>'الدانمارك',
    "CV" =>'الرأس الأخضر',
    "PS" =>'الدولة الفلسطينية',
    "SV" =>'السلفادور',
    "SN" =>'السنغال',
    "SD" =>'السودان',
    "SE" =>'السويد',
    "SO" =>'الصومال',
    "CN" =>'الصين',
    "IQ" =>'العراق',
    "PH" =>'الفلبين',
    "CM" =>'الكاميرون',
    "CG" =>'الكونغو',
    "CD" =>'الكونغو (جمهورية الكونغو الديمقراطية)',
    "KW" =>'الكويت',
    "DE" =>'ألمانيا',
    "HU" =>'المجر',
    "MA" =>'المغرب',
    "MX" =>'المكسيك',
    "UK" =>'المملكة المتحدة',
    "TF" =>'المناطق الفرنسية الجنوبية ومناطق انتراكتيكا',
    "NO" =>'النرويج',
    "AT" =>'النمسا',
    "NE" =>'النيجر',
    "IN" =>'الهند',
    "US" =>'الولايات المتحدة',
    "JP" =>'اليابان',
    "YE" =>'اليمن',
    "GR" =>'اليونان',
    "AQ" =>'أنتاركتيكا',
    "AG" =>'أنتيغوا وبربودا',
    "AD" =>'أندورا',
    "ID" =>'إندونيسيا',
    "AO" =>'أنغولا',
    "AI" =>'أنغويلا',
    "UY" =>'أوروجواي',
    "UZ" =>'أوزبكستان',
    "UG" =>'أوغندا',
    "UA" =>'أوكرانيا',
    "IR" =>'إيران',
    "IE" =>'أيرلندا',
    "IS" =>'أيسلندا',
    "IT" =>'إيطاليا',
    "PG" =>'بابوا-غينيا الجديدة',
    "PY" =>'باراجواي',
    "BB" =>'باربادوس',
    "PK" =>'باكستان',
    "PW" =>'بالاو',
    "BM" =>'برمودا',
    "BN" =>'بروناي',
    "BE" =>'بلجيكا',
    "BG" =>'بلغاريا',
    "BD" =>'بنجلاديش',
    "PA" =>'بنما',
    "BJ" =>'بنين',
    "BT" =>'بوتان',
    "BW" =>'بوتسوانا',
    "PR" =>'بورتو ريكو',
    "BF" =>'بوركينا فاسو',
    "BI" =>'بوروندي',
    "PL" =>'بولندا',
    "BO" =>'بوليفيا',
    "PF" =>'بولينزيا الفرنسية',
    "PE" =>'بيرو',
    "BY" =>'بيلاروس',
    "BZ" =>'بيليز',
    "TH" =>'تايلاند',
    "TW" =>'تايوان',
    "TM" =>'تركمانستان',
    "TR" =>'تركيا',
    "TT" =>'ترينيداد وتوباجو',
    "TD" =>'تشاد',
    "CL" =>'تشيلي',
    "TZ" =>'تنزانيا',
    "TG" =>'توجو',
    "TV" =>'توفالو',
    "TK" =>'توكيلاو',
    "TO" =>'تونجا',
    "TN" =>'تونس',
    "TP" =>'تيمور الشرقية (تيمور الشرقية)',
    "JM" =>'جامايكا',
    "GM" =>'جامبيا',
    "GI" =>'جبل طارق',
    "GL" =>'جرينلاند',
    "AN" =>'جزر الأنتيل الهولندية',
    "PN" =>'جزر البتكارين',
    "BS" =>'جزر البهاما',
    "VG" =>'جزر العذراء البريطانية',
    "VI" =>'جزر العذراء، الولايات المتحدة',
    "KM" =>'جزر القمر',
    "CC" =>'جزر الكوكوس (كيلين)',
    "MV" =>'جزر المالديف',
    "TC" =>'جزر تركس وكايكوس',
    "AS" =>'جزر ساموا الأمريكية',
    "SB" =>'جزر سولومون',
    "FO" =>'جزر فايرو',
    "UM" =>'جزر فرعية تابعة للولايات المتحدة',
    "FK" =>'جزر فوكلاند (أيزلاس مالفيناس)',
    "FJ" =>'جزر فيجي',
    "KY" =>'جزر كايمان',
    "CK" =>'جزر كوك',
    "MH" =>'جزر مارشال',
    "MP" =>'جزر ماريانا الشمالية',
    "CX" =>'جزيرة الكريسماس',
    "BV" =>'جزيرة بوفيه',
    "IM" =>'جزيرة مان',
    "NF" =>'جزيرة نورفوك',
    "HM" =>'جزيرة هيرد وجزر ماكدونالد',
    "CF" =>'جمهورية أفريقيا الوسطى',
    "CZ" =>'جمهورية التشيك',
    "DO" =>'جمهورية الدومينيكان',
    "ZA" =>'جنوب أفريقيا',
    "GT" =>'جواتيمالا',
    "GP" =>'جواديلوب',
    "GU" =>'جوام',
    "GE" =>'جورجيا',
    "GS" =>'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
    "GY" =>'جيانا',
    "GF" =>'جيانا الفرنسية',
    "DJ" =>'جيبوتي',
    "JE" =>'جيرسي',
    "GG" =>'جيرنزي',
    "VA" =>'دولة الفاتيكان',
    "DM" =>'دومينيكا',
    "RW" =>'رواندا',
    "RU" =>'روسيا',
    "RO" =>'رومانيا',
    "RE" =>'ريونيون',
    "ZM" =>'زامبيا',
    "ZW" =>'زيمبابوي',
    "WS" =>'ساموا',
    "SM" =>'سان مارينو',
    "PM" =>'سانت بيير وميكولون',
    "VC" =>'سانت فينسنت وجرينادينز',
    "KN" =>'سانت كيتس ونيفيس',
    "LC" =>'سانت لوشيا',
    "SH" =>'سانت هيلينا',
    "ST" =>'ساوتوماي وبرينسيبا',
    "SJ" =>'سفالبارد وجان ماين',
    "SK" =>'سلوفاكيا',
    "SI" =>'سلوفينيا',
    "SG" =>'سنغافورة',
    "SZ" =>'سوازيلاند',
    "SY" =>'سوريا',
    "SR" =>'سورينام',
    "CH" =>'سويسرا',
    "SL" =>'سيراليون',
    "LK" =>'سيريلانكا',
    "SC" =>'سيشل',
    "RS" =>'صربيا',
    "TJ" =>'طاجيكستان',
    "OM" =>'عمان',
    "GH" =>'غانا',
    "GD" =>'غرينادا',
    "GN" =>'غينيا',
    "GQ" =>'غينيا الاستوائية',
    "GW" =>'غينيا بيساو',
    "VU" =>'فانواتو',
    "FR" =>'فرنسا',
    "VE" =>'فنزويلا',
    "FI" =>'فنلندا',
    "VN" =>'فيتنام',
    "CY" =>'قبرص',
    "QA" =>'قطر',
    "KG" =>'قيرقيزستان',
    "KZ" =>'كازاخستان',
    "NC" =>'كاليدونيا الجديدة',
    "KH" =>'كامبوديا',
    "HR" =>'كرواتيا',
    "CA" =>'كندا',
    "CU" =>'كوبا',
    "CI" =>'كوت ديفوار (ساحل العاج)',
    "KR" =>'كوريا',
    "KP" =>'كوريا الشمالية',
    "CR" =>'كوستاريكا',
    "CO" =>'كولومبيا',
    "KI" =>'كيريباتي',
    "KE" =>'كينيا',
    "LV" =>'لاتفيا',
    "LA" =>'لاوس',
    "LB" =>'لبنان',
    "LI" =>'لختنشتاين',
    "LU" =>'لوكسمبورج',
    "LY" =>'ليبيا',
    "LR" =>'ليبيريا',
    "LT" =>'ليتوانيا',
    "LS" =>'ليسوتو',
    "MQ" =>'مارتينيك',
    "MO" =>'ماكاو',
    "FM" =>'ماكرونيزيا',
    "MW" =>'مالاوي',
    "MT" =>'مالطا',
    "ML" =>'مالي',
    "MY" =>'ماليزيا',
    "YT" =>'مايوت',
    "MG" =>'مدغشقر',
    "EG" =>'مصر',
    "MK" =>'مقدونيا، جمهورية يوغوسلافيا السابقة',
    "BH" =>'مملكة البحرين',
    "MN" =>'منغوليا',
    "MR" =>'موريتانيا',
    "MU" =>'موريشيوس',
    "MZ" =>'موزمبيق',
    "MD" =>'مولدوفا',
    "MC" =>'موناكو',
    "MS" =>'مونتسيرات',
    "ME" =>'مونتينيغرو',
    "MM" =>'ميانمار',
    "NA" =>'ناميبيا',
    "NR" =>'ناورو',
    "NP" =>'نيبال',
    "NG" =>'نيجيريا',
    "NI" =>'نيكاراجوا',
    "NU" =>'نيوا',
    "NZ" =>'نيوزيلندا',
    "HT" =>'هايتي',
    "HN" =>'هندوراس',
    "NL" =>'هولندا',
    "HK" =>'هونغ كونغ SAR',
    "WF" =>'واليس وفوتونا'
];
}
    return $countries;
}

function isVideo($value='')
{
    $fil = explode(".",$value);  
    $file_ex = end($fil);
    if ($file_ex =="mp4") {
        return true;
    }
    return false;
}