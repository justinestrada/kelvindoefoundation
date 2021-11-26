
export const TemplateHome = {
  onLoad: function() {
    TinkeringChallenge.onLoad()
    Podcasts.onLoad()
  },
}

const TinkeringChallenge = {
  onLoad: function() {
    this.honorableMentionsCarousel()
    // this.onWindowResize()
  },
  onWindowResize: function() {
    $(window).on('resize', function() {
      setTimeout( () => {
        $('#honorable-mentions-carousel-wrap').css('visibility', 'hidden')
        $('#honorable-mentions-carousel').owlCarousel('destroy')
        TinkeringChallenge.honorableMentionsCarousel()
      }, 500)
    })
  },
  honorableMentionsCarousel: function() {
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
        0:{
          items:1,
          nav:true,
        },
        600:{
          items:3,
          nav:false,
        },
        1000:{
          items:5,
          nav:true,
          loop:false,
        },
      },
    })
    setTimeout( () => {
      $('#honorable-mentions-carousel-wrap').css('visibility', 'visible')
    }, 500)
  },
  setHonorableMentionsCarouselLeft: function() {
    const container_width = $('.container').first().width()
    const window_width = $(window).width()
    $('#honorable-mentions-carousel-wrap').css('left', (window_width - container_width)/2)
  },
}

const Podcasts = {
  onLoad: function() {
    this.podcastsCarousel()
    // this.onWindowResize()
  },
  onWindowResize: function() {
    $(window).on('resize', function() {
      setTimeout( () => {
        $('#podcasts-carousel-wrap').css('visibility', 'hidden')
        $('#podcasts-carousel-wrap .owl-carousel').owlCarousel('destroy')
        Podcasts.podcastsCarousel()
      }, 500)
    })
  },
  podcastsCarousel: function() {
    $('#podcasts-carousel-wrap .owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
        0:{
          items:1,
          nav:true,
        },
        600:{
          items:3,
          nav:false,
        },
        1000:{
          items:5,
          nav:true,
          loop:false,
        },
      },
    })
    setTimeout( () => {
      $('#podcasts-carousel-wrap').css('visibility', 'visible')
    }, 500)
  },
  seCarouselLeft: function() {
    const container_width = $('.container').first().width()
    const window_width = $(window).width()
    $('#podcasts-carousel-wrap').css('left', (window_width - container_width)/2)
  },
}

