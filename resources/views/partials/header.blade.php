<header class="banner shadow">
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-md">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ home_url('/') }}" title="{{ bloginfo('name') }}">
            <img src="{{ get_field('site_logo', 'option') }}" alt="{{ get_bloginfo('name', 'display') }}" class="my-1 my-md-2 mx-auto" style="display: block; width: 100%; max-width: 180px;"/>
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary_navigation" aria-expanded="false">
            <i class="fas fa-angle-down"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="primary_navigation">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 
            'menu_class' => 'nav navbar-nav justify-content-around',
            ]) !!}
          @endif
          <button type="submit" class="btn action">Subscribe</button>
        </div>
    </nav>
  </div>
</header>
