{{--
  Template Name: Home
--}}

@extends('layouts.app')
@section('content')
  @include('partials.hero')
  @include('modules.home.tinkering-challenge')
  @include('modules.home.recent-posts')
@endsection
