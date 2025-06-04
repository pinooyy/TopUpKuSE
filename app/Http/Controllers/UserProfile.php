<?php


namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserProfile extends Controller
{
   
    public function show()
    {
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Silakan login dulu.');
    }


    $user = Auth::user();
    // $transactions = Transaction::where('user_id', $user->id)->latest()->get();


    return view('profile', compact('user'));
    }
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login')->with('success', 'Berhasil logout.');
    }
   
    function ChangeUsn(){


    }


    function ChangePw(){


    }


    function ChangeEmail(){


    }


    function Confirm(){


    }
   
    //ini digunakan untuk alter information yang sudah ada di dalam database user
    //misal mau ganti email, pw atau usn si user
}


