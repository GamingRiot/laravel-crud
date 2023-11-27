<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index()
  {
    return view('posts', [
      'posts' => Post::latest()->filter()->paginate(10)
    ]);
  }

  public function show(Post $post)
  {
    return view('post', [
      'postInfo' => $post
    ]);
  }
}
