<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if($user->avatar){
            Storage::delete($user->avatar);
        }

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
