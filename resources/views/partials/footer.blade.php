
<section id="subscribe" class="bg-light-gray py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h3>Receive Regular Updates and Notifications</h3>
        <a href="#" class="btn btn-outline-primary">
          <span class="d-inline-block mr-3">Subscribe</span>
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<footer class="footer content-info py-5 px-2">
  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-sm-3">
        <img src="{{ get_field('site_logo', 'option') }}" alt="{{ get_bloginfo('name', 'display') }}" class="mb-3 site-icon"/>
        <div class="font-weight-bold mb-3">
          {{ get_bloginfo('name', 'display') }}
        </div>
        @if ($social_links = get_field('social_links', 'option'))
          <ul class="d-flex flex-row justify-content-start footer-social-links pl-0 mb-0">
            @foreach ($social_links as $social_link)
              <li class="social-link-item mr-3">
                <a href="{{$social_link['link']}}" target="_blank" rel="noopener noreferrer" class="d-block mx-auto"><i class="fab {{$social_link['icon']}}"></i></a>
              </li>
            @endforeach
          </ul>
        @endif
      </div>
      {{-- <div class="col-sm-9 footer-sidebar d-flex justify-content-around">
        @php dynamic_sidebar('sidebar-footer') @endphp
      </div> --}}
    </div>
    <div class="row">
      <div class="col">
        <div class="mb-3"><a href="/privacy-policy" class="mr-3">Privacy Policy</a> <a href="/terms-conditions">Terms and Conditions</a></div>
        <small class="d-block">&copy; {{ date('Y') }}, {{ bloginfo('name') }}</small>
      </div>
    </div>
  </div>
</footer>
