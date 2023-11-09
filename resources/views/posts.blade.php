@extends('components/layout')
@section('title')
  <title>Posts</title>
@endsection
@section('content')

  <x-post-header/>
  <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if($posts->count())
      <x-post-featured-card :post="$posts[0]" />
      <div class="lg:grid lg:grid-cols-6">
        @foreach($posts->skip(1) as $post)
          <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"/>
        @endforeach
      </div>
    @else
      <p>No posts added for now. Come back later.</p>
    @endif
  </main>
@endsection