<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('role', '!=', 'admin')->get();
        return view('user/tampil', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $data = User::find($id);
        $data->update([
            'role' => $request->role
        ]);

        return redirect('user')->with('success', 'Hak akses berhasil diubah');
    }

}