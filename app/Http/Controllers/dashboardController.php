<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dashboardController extends Controller
{
    public function home(){
        $users = User::paginate(10);
         return view('dashboard.home', compact('users'));
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
}
