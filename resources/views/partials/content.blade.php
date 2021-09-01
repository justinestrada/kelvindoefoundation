<article @php post_class(['d-flex justify-content-start align-items-center flex-row m-2 p-0']) @endphp>
  <img src="{{get_the_post_thumbnail_url(null, 'full') }}" alt="{{get_the_title()}}">
  <div class="card-body flex-fill p-3">
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
