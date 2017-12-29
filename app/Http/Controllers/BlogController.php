<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
  public function index() {

		// get the latest posts from the database
		// $blogs = Blog::all();
		$blogs = Blog::latest()->get();
		return view('blog.index', compact('blogs'));
	}
}
