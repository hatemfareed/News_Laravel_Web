<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    
    public function index()
    {
        return view('user.index');
    }
    
    public function edit($id)
    {
        return view('user.edit');
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('dashboard.users')->with('success', 'User deleted successfully');
    }
}
