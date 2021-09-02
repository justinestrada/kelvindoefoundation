{{--
  Template Name: Blog
--}}
@section('container')
container py-5
@endsection
@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-sm-3">
      <div class="blog-sidebar">
        @include('partials/sidebar')
      </div>
    </div>
    <div class="col-sm-9">
        @php
          $query = new WP_Query(['post_status' => 'publish']);
        @endphp
        @while($query->have_posts()) @php $query->the_post() @endphp
          @include('partials/content')
        @endwhile
    </div>
  </div>
@endsection