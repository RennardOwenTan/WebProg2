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

    public function showAnimalOfCategory($id){
        $totalPosts = Blog::where('category', $id)->get();
    
        return view('category')->with([
            'blogs' => $totalPosts
        ]);
    }

    public function viewAbout(){
        return view('about');
    }
}
