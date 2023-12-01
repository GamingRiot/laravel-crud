@extends('components/layout')
@section('title')
  <title>Posts</title>
@endsection
@section('content')
  @if(session()->has('success'))
    <div id="topAlert" class="hidden fixed top-0 left-1/2 transform -translate-x-1/2 w-50 bg-green-500 text-white p-4 rounded-md mt-5">
      <!-- Content of your alert goes here -->
      {{ session('success') }}
    </div>
  @endif
  <x-post-header/>
  <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if($posts->count())
      <x-post-featured-card :post="$posts[0]" />
      <div class="lg:grid lg:grid-cols-6">
        @foreach($posts->skip(1) as $post)
          <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"/>
        @endforeach
      </div>
      {{$posts->links()}}
    @else
     <b><p class="text-center">No posts added for now. Come back later.</p></b>
    @endif
  </main>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
    // Show the alert initially (for demonstration purposes)
    showTopAlert();

    // Function to show the top alert
    function showTopAlert() {
      const topAlert = document.getElementById('topAlert');
      topAlert.classList.remove('hidden');
      topAlert.classList.add('animate-slide-in');
      setTimeout(() => {
        hideTopAlert();
      }, 3000); // Adjust the duration as needed
    }

    // Function to hide the top alert
    function hideTopAlert() {
      const topAlert = document.getElementById('topAlert');
      topAlert.classList.remove('animate-slide-in');
      topAlert.classList.add('hidden');
    }
  });
  </script>
@endsection
