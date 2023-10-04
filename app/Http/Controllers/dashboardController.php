<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dashboardController extends Controller
{
    public function home(){
         return view('dashboard.home');
     }
     public function users(){
        $users = User::paginate(10);
         return view('dashboard.users', compact('users'));
     }
     public function blogs(){
        
         return view('dashboard.blogs');
     }
 
     public function category(){
        
         return view('dashboard.category');
     }
     public function posts(){
        
         return view('dashboard.posts');
     }
     public function articles(){
        
         return view('dashboard.articles');
     }

    public function destroyUsers($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('dashboard.users')->with('success', 'User deleted successfully');
    }

    public function editUsers($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.users.edit', compact('user'));
    }
}
