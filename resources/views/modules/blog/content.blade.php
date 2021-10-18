
<div class="container">
  <div class="blog-categories-row d-flex flex-row py-3 mb-3">
    <a href="/blog" class="text-black px-3 py-2 active">All</a>
    @php
    $categories = get_categories([
      'orderby' => 'name',
      'order' => 'ASC'
    ]);
    @endphp
    @if ($categories)
      @foreach ($categories as $category)
        <a href="{{ esc_url( get_category_link( $category->term_id ) ) }}" class="text-black px-3 py-2">{{ $category->name }}</a>
      @endforeach
    @endif
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