// import external dependencies
import 'jquery';
import { library ,dom } from '@fortawesome/fontawesome-svg-core';
import { faAngleDown, faBars, faTimes, faArrowRight } from '@fortawesome/free-solid-svg-icons';
import { faArrowAltCircleDown } from '@fortawesome/free-regular-svg-icons';
import { faFacebookF, faTwitter, faInstagram, faLinkedin } from '@fortawesome/free-brands-svg-icons';

library.add(faArrowAltCircleDown, faAngleDown, faFacebookF, faTwitter, faInstagram, faTwitter, faLinkedin, faBars, faTimes, faArrowRight)
// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
dom.watch();

import { Header } from './layouts/header';
import { TemplateHome } from './modules/templateHome';

// eslint-disable-next-line no-unused-vars
jQuery(document).ready(function($) {
  Header.onLoad()
  TemplateHome.onLoad()
})
