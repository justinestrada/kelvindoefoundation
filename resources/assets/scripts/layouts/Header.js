
export const Header = {
  onLoad: function() {
    this.setHeaderWidth()
    this.onWindowResize()
  },
  onWindowResize: function() {
    $(window).on('resize', function() {
      Header.setHeaderWidth()
    })
  },
  setHeaderWidth: function() {
    const window_width = $(window).width()
    const $main_nav = $('#main-nav')
    if (window_width >= 768) {
      const container_width = $('.container').first().width()
      const new_width = (((window_width - container_width) / 2) + container_width) + 'px'
      $main_nav.css('max-width', new_width)
    }
    $main_nav.css('visibility', 'visible')
  },
}
