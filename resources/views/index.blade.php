@extends('layouts.index')

@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset ('clean/img/home-bg.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Voyager Admin Panel for Opennbox</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
</header>
@stop

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($posts as $post)
            @include('partials.post', ['post' => $post])
        @endforeach

        {{ $posts->links() }}

    </div>
</div>
@stop
