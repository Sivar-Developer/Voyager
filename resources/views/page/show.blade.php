@extends('layouts.index')

@section('header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset ('storage/'.$page->image)}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>{{ $page->title }}</h1>
            <span class="subheading">{{ $page->excerpt }}</span>
            <span class="subheading">{{ $page->sub_title }}</span>
          </div>
        </div>
      </div>
    </div>
</header>
@stop

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        {!! $page->body !!}
        </div>
    </div>
</div>
<hr>
@stop






