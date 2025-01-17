<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show($slug)
   {
       return view('blog', [
           'blog' => blog::where('slug', '=', $slug)->first()
       ]);
   }
}
