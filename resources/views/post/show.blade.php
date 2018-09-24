@extends('layouts.index')


@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset ('clean/img/post-bg.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->title }}</h1>
            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
            <span class="meta">Posted by
              <a href="#">{{ $post->author->name }}</a>
              on {{ $post->created_at->format('F d, Y') }}</span>
          </div>
        </div>
      </div>
    </div>
</header>
@stop

@section('content')
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {!! $post->body !!}
        </div>
      </div>
    </div>
  </article>
  <hr>
@stop
