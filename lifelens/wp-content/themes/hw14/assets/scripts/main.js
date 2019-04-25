(function ($) {
  $(document).ready(function () {
    $('.home_slider').owlCarousel({
      items: 1,
      nav: true,
      center: true,
      loop: true,
      dots: true,
      autolay: true,
      autolayTimeout: 6000,
      autolayHoverPause: true,
      slideTransition: 'linear',
      smartSpeed: 500,
      navText: [
        '<i class="fas fa-chevron-left"></i>',
        '<i class="fas fa-chevron-right"></i>',
      ],
    })

    $('.section6-wrap .section6-but a').click(function () {
      let indexImage = $(this).data('image')
      $('.section6-textblock2-wrap h4, .section6-text2 .text').removeClass('active')

      $('.section6-wrap .image img').removeClass('active')
      $('.section6-wrap .image .' + indexImage).addClass('active')
      $('.section6-textblock2-wrap h4.' + indexImage).addClass('active')
      $('.section6-text2 .text.' + indexImage).addClass('active')
    })

    $('.section6-wrap .section6-but').click(function () {
      $('.section6-wrap .section6-but').removeClass('active')
      $(this).addClass('active')
    })

    function once (fn, context) {
      let result

      return function () {

        if (fn) {

          $('.about3-count1').each(function (index, obj) {
            let size = $(this).text().split('.')[1] ? $(this).text().split('.')[1].length : 0
            let text = $(this).text().replace(/[^0-9]+/g, '')

            $(this).prop('Counter', 0)
              .delay(index * 1000)
              .animate({
                Counter: text
              }, {
                duration: 2500,
                step: function (now) {
                  $(this).text(parseFloat(now).toFixed(size).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'))
                }
              })
          })

          result = fn.apply(context || this, arguments)
          fn = null
        }

        return result
      }
    }

    let counterOnce = once(() => {
    })

    function counterAnim () {
      let windowTopPos = $(window).scrollTop()
      let windowBottomPos = windowTopPos + $(window).height()
      let block = $('.aboutus-section3')
      let blockNum = $('.aboutus-section3 .about3-count1')
      let elementPos = ($(window).width() > 798) ? blockNum.offset().top : blockNum.offset().top + blockNum.height()
      let blockPos = block.offset().top + block.height()

      if (windowBottomPos >= elementPos && windowTopPos <= blockPos) {
        counterOnce()
      }
    }

    counterAnim()
    $(window)
      .resize(function () {
        counterAnim()
      })
      .scroll(function () {
        counterAnim()
      })
  })
})(jQuery)
