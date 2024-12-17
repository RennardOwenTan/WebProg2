<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function viewHomepage(){
        $blogs = Blog::all();  
        
        return view('home', ['blogs' => $blogs]);
    }

    public function viewCategory(Request $request){
        $query = $request->search;
        $blogs = Blog::where('category', 'like', "%$query%")->get();
        return view('category', ['blogs' => $blogs]);
    }
}
