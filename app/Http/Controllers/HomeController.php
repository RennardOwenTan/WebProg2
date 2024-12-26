<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function viewHomepage(){
        // Sort by 'species' and paginate the results (9 per page)
        $blogs = Blog::orderBy('species')->paginate(12);
        
        // Return the sorted and paginated blogs to the view
        return view('home', ['blogs' => $blogs]);
    }

    public function showAnimalOfCategory($id){
        $totalPosts = Blog::where('category', $id)->get();
        $totalPosts = $totalPosts->sortBy('species');
        return view('category')->with(key: [
            'blogs' => $totalPosts
        ]);
    }

    public function viewAbout(){
        return view('about');
    }

    public function showDetail(Request $request){
        $animal = Blog::find($request->id);
        return view('details')->with('animal', $animal);
    }
}
