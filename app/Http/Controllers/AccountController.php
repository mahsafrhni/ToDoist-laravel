<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('account.index' , ["page_title" => 'ویرایش حساب کاربری' ,'user' => $user]);
    }

    public function update(Request $request)
    {
        if($request->form_id == "account_update") {
            $this->validate($request ,[
                'first_name' => ['required', 'string', 'max:123'],
                'last_name' => ['required', 'string', 'max:123'],
                'job' => ['string', 'max:123'],
                'bio' => ['string', 'max:1000'],
            ]);
            if (User::where('id', Auth::user()->id)->update($request->except(['_token', 'email']))) {
                return redirect(url()->previous());
            }
        }elseif($request->form_id == "password_update"){
            if(Hash::check($request->current_pass,Auth::user()->getAuthPassword() ))
            {
                if(!is_null($request->new_pass) && $request->new_pass == $request->confirm_pass)
                    if(User::where("id" , Auth::user()->id)->update(['password' => Hash::make($request->new_pass)]))
                        return redirect(url()->previous() );
                else
                    'bbbb';

            }else{
                //message

            }
        }


    }
}
