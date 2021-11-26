<style>
.strategy-block__item {
  padding: 3rem 1rem;
  border: 1px solid white;
}
.strategy-block__item .strategy-block__item-img-wrap {
  max-width: 96px;
  margin: 0 auto 1rem;
}
.strategy-block__item .strategy-block__item-img-wrap img {
  width: 100%;
}
.strategy-block__item h3.strategy-block__item-title {
  font-size: 1rem;
  text-align: center;
}
.strategy-block__item-content {
  display: none;
}
</style>
@php
$tinkering_challenge = get_field('tinkering_challenge');
@endphp
<section id="tinkering-challenge" class="bg-dark-purple text-white py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-10 col-xl-8">
        <h2 class="mb-3">DIY Tinkering Challenge</h2>
        <div>
          {!! $tinkering_challenge['section_description'] !!}
        </div>
      </div>
    </div>
    @if ($tinkering_challenge['carousel'])
      <div class="row">
        <div class="col">
          <div class="mb-5">
            <h3>Honorable Mentions</h3>
            @if ($tinkering_challenge['carousel']['description'])
              <div>{!! $tinkering_challenge['carousel']['description'] !!}</div>
            @endif
          </div>
          <div id="honorable-mentions-carousel-wrap" style="visibility: hidden;" class="mb-5"> 
            <div class="owl-carousel">
              @foreach ($tinkering_challenge['carousel']['items'] as $mention)
                <div class="strategy-block__item">
                  <div class="strategy-block__item-img-wrap">
                    <img src="{{ $mention['image']['url'] }}" alt="{{ $mention['image']['alt'] }}"/>
                  </div>
                  <h3 class="strategy-block__item-title">{{ $mention['title'] }}</h3>
                </div>
              @endforeach
            </div>
          </div>
          @if ($tinkering_challenge['carousel']['after_carousel_items'])
            <div>{!! $tinkering_challenge['carousel']['after_carousel_items'] !!}</div>
          @endif
        </div>
      </div>
    @endif
  </div>
</section>
