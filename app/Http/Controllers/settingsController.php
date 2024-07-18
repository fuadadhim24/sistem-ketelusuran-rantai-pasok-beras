<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class settingsController extends Controller
{
    function index(){
        $user = Auth::user();
        return view('admin.settings.index', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'new_password' => 'required|string|min:6',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->nama;
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('settings')->with('success', 'Profil berhasil diperbarui!');
    }

}
