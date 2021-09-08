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
    <div class="container py-5">
      <h2>Recent Posts</h2>
      <div class="d-flex flex-column flex-md-row justify-content-between home-recent-posts">
        @while($query->have_posts()) @php $query->the_post() @endphp
        @php
          $post_categories = wp_get_post_categories( get_the_ID(), array( 'fields' => 'names' ) );
        @endphp
        <article @php post_class(['justify-content-start align-items-center card my-2 p-0']) @endphp>
          <div class="w-100 card-body categories-container">
            @foreach ($post_categories as $post_category)
                <span class="categories">{{ $post_category }}</span>
            @endforeach
          </div>
          <img src="{{get_the_post_thumbnail_url(null, 'full') }}" alt="{{get_the_title()}}" class="w-100">
          <div class="w-100 card-body">
            <header>
              <div class="categories-secondary-container">
                @foreach ($post_categories as $post_category)
                  <span class="categories">{{ $post_category }}</span>
                @endforeach
              </div>
              <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
              <div class="post-meta">
                @include('partials/entry-meta')
                <a href="{{ get_permalink() }}">Read  &nbsp<i class="fas fa-arrow-right" aria-hidden="true"></i>
              </div>
              </a>
            </header>
          </div>
        </article>    
        @endwhile
      </div>
    </div>
  </div>
@endsection
