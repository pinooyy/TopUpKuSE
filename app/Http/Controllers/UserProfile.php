<?php


namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ActivityHistory;



class UserProfile extends Controller
{
    public function show()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login dulu.');
        }

        $user = Auth::user();

        // Fetch activity history for the user, latest first
        $activityHistory = ActivityHistory::orderBy('created_at', 'desc')->get();

        return view('profile', compact('user', 'activityHistory'));
    }
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login')->with('success', 'Berhasil logout.');
    }
   
public function update(Request $request)
{
    /** @var \App\Models\User $user */
    $user = Auth::user();

    $request->validate([
    'username' => 'required|string|unique:users,username,' . $user->username . ',username',
    ]);


    $user->username = $request->username;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated!');
}


   
    //ini digunakan untuk alter information yang sudah ada di dalam database user
    //misal mau ganti email, pw atau usn si user
}


