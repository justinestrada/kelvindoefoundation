
<div class="container">
  @php
  $categories = get_categories([
    'orderby' => 'name',
    'order' => 'ASC'
  ]);
  @endphp
  @if ($categories)
    <div class="d-flex flex-row py-3 mb-3 blog-categories-row">
      <a href="/blog" class="px-3 py-2 text-black">All</a>
      @foreach ($categories as $category)
        <a href="{{ esc_url( get_category_link( $category->term_id ) ) }}" class="px-3 py-2 text-black">{{ $category->name }}</a>
      @endforeach
    </div>
  @endif
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