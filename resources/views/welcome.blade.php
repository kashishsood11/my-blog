@extends('layout')

@section('header')
    <!-- header -->
    <header class="header" style=" background-image: url('https://images.pexels.com/photos/1591056/pexels-photo-1591056.jpeg?cs=srgb&dl=pexels-miguel-%C3%A1-padri%C3%B1%C3%A1n-1591056.jpg&fm=jpg');">
      <div class="header-text">
        <h1>Kashish's Blog</h1>
        <h4>Dashboard of verified news...</h4>
      </div>
      <div class="overlay"></div>
    </header>
  
@endsection

@section('main')
    <!-- main -->
    <main class="container">
      <h2 class="header-title">Latest Blog Posts</h2>
      <section class="cards-blog latest-blog">
        @foreach ($posts as $post )
        <div class="card-blog-content">
         <img src="{{asset($post->imagePath)}}" alt="" />
         <p>
           {{$post->created_at->diffForHumans()}}
           <span>Written By {{$post->user->name}}</span>
         </p>
         <h4>
           <a href="{{route('blog.show', $post)}}">{{$post->title}}</a>
         </h4>
       </div>
        @endforeach
      </section>
    </main>
@endsection