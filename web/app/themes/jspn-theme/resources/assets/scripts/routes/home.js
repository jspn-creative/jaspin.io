export default {
 /* eslint-disable no-unused-vars */
  init() {
        var swiper = new Swiper('.portfolio-slider', {// eslint-disable-line
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        mousewheel: {
          invert: false,
        },
        // autoHeight: true,
        pagination: {
          el: '.portfolio-slider__pagination',
          clickable: true,
        },
      });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $(document).ready(

      // Toggle the contact form
      function() {
        $('#nf-form-1-cont').addClass('container'); // NF is dumb.
        var $triggers = document.querySelectorAll('.openContact');

        for (var i = 0; i < $triggers.length; i++) {
          $triggers[i].addEventListener('click', function() {
            $('#contactForm').slideDown('1200');
          })
        }
        $('#toggleContact').click(function() {
          $('#contactForm').slideToggle('1200');
        })
      },

      // Scroll to anchors
      $('.anchorLink').click(function(e) {
        e.preventDefault();
        var aid = $(this).attr('href');
        $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
      }));
  },
};
