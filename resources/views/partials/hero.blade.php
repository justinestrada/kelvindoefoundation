<style>
.hero {
  display: flex;
  align-items: center;
  height: 100vh;
  padding-top: 80px;
}
</style>
@if ($hero = get_field('hero'))
  <section class="hero bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="d-flex align-items-center col-lg-6">
          <div>
            <h1 class="mb-3">{!! $hero['heading'] !!}</h1>
            <div class="mb-3">
              {!! $hero['text'] !!}
            </div>
            @if ($button = $hero['button'])
              <a href="{{ $button['url'] }}" class="btn btn-primary">
                <span class="mr-3">{{ $button['title'] }}</span>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            @endif
          </div>
        </div>
        @if ($image = $hero['image'])
          <div class="col-lg-6">
            <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-100"/>
          </div>
        @endif
      </div>
    </div>
  </section>
@endif