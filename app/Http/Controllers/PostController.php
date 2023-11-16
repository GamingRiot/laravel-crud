<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index()
  {
    // $posts = Post::latest();
    // if (request('search')) {
    //   $posts = $posts
    //     ->where('title', 'like', '%' . request('search') . '%')
    //     ->Orwhere('body', 'like', '%' . request('search') . '%');
    // }
    return view('posts', [
      'posts' => Post::latest()->filter()->get()
    ]);
  }

  public function show(Post $post)
  {
    return view('post', [
      'postInfo' => $post
    ]);
  }
}
