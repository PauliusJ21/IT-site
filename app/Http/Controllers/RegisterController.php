<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        $admin = User::all();
        return view('admin.index', ['admin' => $admin]);
    }



    public function edit(User $admin)
    {
        return view('admin.edit', ['admin' => $admin]);
    }

    public function mute(User $admin)
    {
        return view('admin.mute', ['admin' => $admin]);
    }
    public function promote(User $admin)
    {
        return view('admin.promote', ['admin' => $admin]);
    }
    public function demote(User $admin)
    {
        return view('admin.demote', ['admin' => $admin]);
    }
    public function unmute(User $admin)
    {
        return view('admin.unmute', ['admin' => $admin]);
    }

    public function update(Request $request, User $admin)
    {
        $admin->mute = $request->input('mute');

        $admin->save();

        return redirect()->route('admin.index');
    }
    public function updatep(Request $request, User $admin)
    {
        $admin->role = $request->input('role');

        $admin->save();

        return redirect()->route('admin.index');
    }

    public function destroy(User $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index');
    }
}
