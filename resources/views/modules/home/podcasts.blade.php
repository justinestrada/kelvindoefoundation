
@php
$podcasts_settings = get_field('these_podcasts', get_queried_object_id());
@endphp
<section id="podcasts" class="bg-dark-purple text-white py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-10 col-xl-8">
        <h2 class="mb-3">{!! $podcasts_settings['heading'] !!}</h2>
        <div>{!! $podcasts_settings['description'] !!}</div>
      </div>
    </div>
    @php
    $podcasts = get_posts([
      'post_type' => 'podcast',
    ]);
    @endphp
    @if ($podcasts)
      <div class="row">
        <div class="col">
          <div id="podcasts-carousel-wrap" style="visibility: hidden;" class="mb-5"> 
            <div class="owl-carousel">
              @foreach ($podcasts as $podcast)
                <div class="strategy-block__item">
                  <div class="strategy-block__item-img-wrap">
                    <img src="{{ get_the_post_thumbnail_url($podcast->ID) }}" alt="{{ get_the_title($podcast->ID) }}"/>
                    {{-- <img src="{{ $mention['image']['url'] }}" alt="{{ $mention['image']['alt'] }}"/> --}}
                  </div>
                  <h3 class="strategy-block__item-title">{{ get_the_title($podcast->ID) }}</h3>      
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
</section>
  