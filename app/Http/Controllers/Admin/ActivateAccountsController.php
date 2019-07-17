<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivateAccountsController extends Controller
{
      public function activate($id)
        {
            $user=User::findOrFail($id);
//            dd($user->id);
            $user->is_active = '1';
            $user->save();
            alert()->success('تم تفعيل الحساب !')->autoclose(5000);
            return back();
        }


        public function deactivate(User $user)
        {
            $user->is_active = '0';
            $user->save();
            alert()->success('تم إلغاء تفعيل الحساب !')->autoclose(5000);
            return back();
        }
}
