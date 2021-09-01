{{--
  Template Name: Narrow Template
--}}

@extends('layouts.app')
@section('container')
container py-5
@endsection
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
