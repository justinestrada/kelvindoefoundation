{{--
  Template Name: Home
--}}
@extends('layouts.app')
@section('content')
  <img src="{{get_field('hero_image', 'option')}}" style="width: 100%">
  <div class="home-wrapper wrapper clearfix">
    @php
    $query = new WP_Query(['post_status' => 'publish']);
    @endphp
    <div class="p-5">
      <h2>Recent Posts</h2>
      <div class="d-inline-flex justify-content-around home-recent-posts">
        @while($query->have_posts()) @php $query->the_post() @endphp
        <article @php post_class(['justify-content-start align-items-center card m-2 p-0 shadow']) @endphp>
          <img src="{{get_the_post_thumbnail_url(null, 'full') }}" alt="{{get_the_title()}}" class="w-100">
          <div class="w-100 card-body flex-fill p-3">
            <header>
              <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
              @include('partials/entry-meta')
            </header>
            <div class="entry-summary">
              @php the_excerpt() @endphp
            </div>
          </div>
        </article>    
        @endwhile
      </div>
    </div>
  </div>
@endsection
