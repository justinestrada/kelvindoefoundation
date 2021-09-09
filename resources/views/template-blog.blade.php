{{--
  Template Name: Blog
--}}
@extends('layouts.app')
@section('content')
<div class="blog-hero-wrapper" style="background-image: url({{get_field('blog_hero_image', 'option')}})">
  <div class="blog-hero-wrapper-container d-flex align-items-center">
    <div class="container blog-hero-wrapper-content">
      {!! do_shortcode('[aioseo_breadcrumbs]') !!}
      <h1>{!! get_the_title() !!}</h1>
      {!! get_field('blog_hero_image_content', 'option') !!}
      @if (get_field('blog_hero_image_action', 'option'))
          <a href="{{get_field('blog_hero_image_action', 'option')['url']}}"><button class="btn action btn-kelvin">{{get_field('blog_hero_image_action', 'option')['title']}}</button></a>
      @endif
    </div>
  </div>
</div>
<div class="container">
  <div class="d-flex flex-row py-3 mb-3 blog-categories-row">
    @php
      $categories = get_categories( [
        'orderby' => 'name',
        'order'   => 'ASC'
      ]);
    @endphp
    <a href="/blog" class="px-3 py-2 text-black">All</a>
    @foreach ($categories as $category)
        <a href="{{ esc_url( get_category_link( $category->term_id ) ) }}" class="px-3 py-2 text-black">{{ $category->name }}</a>
    @endforeach
  </div>
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
</div>
@endsection