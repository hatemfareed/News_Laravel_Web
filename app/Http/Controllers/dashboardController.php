<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role ;

class dashboardController extends Controller
{
    public function home(){
         return view('dashboard.home');
     }
     public function users(){
        $users = User::paginate(10);
        // foreach ($users as $user) {
        //     $roles = $user->roles(); // This will get the roles for each user
        //     dd($roles->pluck('name'));
        // }
        
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
    public function addAbility(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'ability' => 'required|string|max:255',
        ]);
        
        return redirect()->route('dashboard.users')->with('success', 'User deleted successfully');
    }

}
