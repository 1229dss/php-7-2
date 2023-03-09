<?php

namespace App\Http\Controllers;

use App\Models\Register;  // usersテーブル
use App\Models\Password_reset;  // password_resetsテーブル
use Illuminate\Http\Request;



use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function reset_password (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'password_conf' => 'required | same:password',
        ]);
        
        \DB::beginTransaction();
        try {
            $user = Register::where('email', $request['email'])->get();
            $user_password_reset = Password_reset::where('email', $request['email'])->get();

            if(isset($user['0']['id']) && isset($user_password_reset['0']['id'])) {
                $user = Register::find($user['0']['id']);
                $request['password'] = Hash::make($request['password']); 

                $user->fill([
                    'password' => $request['password'],
                ]);
                $user->save();
                $user_password_reset['0']->delete();
                \Session::flash('notice_msg', 'アカウント情報を変更しました。');
                \DB::commit();
                return redirect('login');
            } else {
                \DB::rollback();    
                \Session::flash('notice_msg', '最初からやり直してください。');
                return redirect('login');
            }
            
        } catch(\Throwable $e) {
            \DB::rollback();    
            \Session::flash('notice_msg', '最初からやり直してください。');
            return redirect('login');
        }   
    }
}
