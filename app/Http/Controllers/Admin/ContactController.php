<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contacts.index')->with('items',Contact::latest()->get());
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        popup('delete');
        return back();
    }
}
