
@php
$blog_page_id = (int)get_option( 'page_for_posts' );    
@endphp
@if ($hero = get_field('hero', $blog_page_id))
  <div class="blog-hero-wrapper" style="background-image: url('{{ $hero['image'] }}')">
    <div class="blog-hero-wrapper-container d-flex align-items-center">
      <div class="container blog-hero-wrapper-content">
        @if (function_exists('aioseo_breadcrumbs'))
          {!! do_shortcode('[aioseo_breadcrumbs]') !!}
        @endif
        <h1>{!! get_the_title($blog_page_id) !!}</h1>
        <div>
          {!! $hero['content'] !!}
        </div>
        @if ($hero['action'])
          <a href="{{ $hero['action']['url'] }}" class="btn action btn-kelvin">
            {{ $hero['action']['title'] }}
          </a>
        @endif
      </div>
    </div>
  </div>
@endif
