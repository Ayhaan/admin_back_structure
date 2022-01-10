<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // $blogs = Blog::all();
        return view("admin.blog.main");
    }

    public function create()
    {
        //
    }
    
    public function store()
    {
        //
    }
}
