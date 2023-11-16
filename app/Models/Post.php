<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;
  protected $guarded = [];
  protected $with = ['category', 'author'];

  public function getRouteKeyName()
  {
    return 'slug';
  }
  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function scopeFilter($query)
  {
    if (request('search')) {
      $query = $query
        ->where('title', 'like', '%' . request('search') . '%')
        ->Orwhere('body', 'like', '%' . request('search') . '%');

      return $query;
    }
  }
}
