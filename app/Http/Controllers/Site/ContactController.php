<?php

namespace App\Http\Controllers\Site;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.pages.contact');
    }

    public function store(Request $request)
    {
      $inputs=  $request->validate([
            'name'=>'required|string',
            'phone'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

      Contact::create($inputs);
      alert()->success('تم الارسال بنجاح !')->with('success', __('trans.add_success'));
      return back();
    }
}
