<footer class="footer content-info p-2 pt-5 shadow">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <img src="{{ get_field('site_logo', 'option') }}" alt="{{ get_bloginfo('name', 'display') }}" class="mb-4 site-icon"/>
        <ul class="d-flex flex-row justify-content-start footer-social-links pl-0">
        @foreach (get_field('social_links', 'option') as $social_link)
          <li class="social-link-item mr-3">
            <a href="{{$social_link['link']}}" target="_blank" rel="noopener noreferrer" class="d-block mx-auto"><i class="fab {{$social_link['icon']}}"></i></a>
          </li>
        @endforeach
        </ul>
      </div>
      <div class="col-sm-9 footer-sidebar d-flex justify-content-around">
        @php dynamic_sidebar('sidebar-footer') @endphp
      </div>
    </div>
  </div>
</footer>
