<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role ;
use App\Models\Category ;
class dashboardController extends Controller
{
    public function home(){
         return view('dashboard.home');
     }

     public function users(){
        $users = User::paginate(10);
        $roles = Role::all();   
         return view('dashboard.users', compact('users', 'roles'));
     }
     public function blogs(){
        
         return view('dashboard.blogs');
     }
 
     public function category(){
        $categories = Category::paginate(10);
         return view('dashboard.category' , compact('categories'));
     }
     public function posts(){
        
         return view('dashboard.posts');
     }
     public function articles(){
        
         return view('dashboard.articles');
     }

    
    public function addAbility(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'ability' => 'required|string|max:255',
        ]);
        $user->roles()->sync($request->ability);
        return redirect()->route('dashboard.users')->with('success', 'User deleted successfully');
    }
    public function destroyUsers($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('dashboard.users')->with('success', 'User deleted successfully');
    }

    public function addCategory(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->type = $request->type;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . $request->name .'.' . $file->getClientOriginalExtension();
            $path = $file->move(public_path('assets\img\Categories/'), $fileName);
            $category->image = $fileName;
        }
        $category->save();
        return redirect()->route('dashboard.categories')->with('success', 'Category added successfully');

        

    }



}
