<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {

    $user = User::factory()->create([
      'name' => 'John Doe'
    ]);
    $category = Category::factory()->create([
      'name' => 'Hobbies'
    ]);
    Post::factory(40)->create([
      'user_id' => $user->id,
      'category_id' => $category->id
    ]);
    // $personal = Category::create([
    //   'name' => 'Personal',
    //   'slug' => 'personal'
    // ]);
    // $work = Category::create([
    //   'name' => 'Work',
    //   'slug' => 'work'
    // ]);
    // $hobbies = Category::create([
    //   'name' => 'Hobbies',
    //   'slug' => 'hobbies'
    // ]);

    // Post::create([
    //   'user_id' => $user->id,
    //   'category_id' => $personal->id,
    //   'title' => 'This is first post',
    //   'excerpt' => 'Welcome to my first blog post',
    //   'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //   'slug' => 'my-first-post'
    // ]);
    // Post::create([
    //   'user_id' => $user->id,
    //   'category_id' => $work->id,
    //   'title' => 'This is second post',
    //   'excerpt' => 'Welcome to my second blog post',
    //   'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //   'slug' => 'my-second-post'
    // ]);
    // Post::create([
    //   'user_id' => $user->id,
    //   'category_id' => $work->id,
    //   'title' => 'This is third post',
    //   'excerpt' => 'Welcome to my third blog post',
    //   'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //   'slug' => 'my-third-post'
    // ]);
    // Post::create([
    //   'user_id' => $user->id,
    //   'category_id' => $hobbies->id,
    //   'title' => 'This is fourth post',
    //   'excerpt' => 'Welcome to my fourth blog post',
    //   'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //   'slug' => 'my-fourth-post'
    // ]);
    // Post::create([
    //   'user_id' => $user->id,
    //   'category_id' => $personal->id,
    //   'title' => 'This is fifth post',
    //   'excerpt' => 'Welcome to my fifth blog post',
    //   'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //   'slug' => 'my-fifth-post'
    // ]);
    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
