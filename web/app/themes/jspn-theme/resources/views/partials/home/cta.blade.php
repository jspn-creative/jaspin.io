<?php
function wq(){
  $year = date("Y");
  switch (date("n")) {
    case 0:
    case 1:
    case 2:
        echo "<br>for Q1 of ".$year;
        break;
    case 3:
    case 4:
    case 5:
        echo "<br>for Q2 of ".$year;
        break;
    case 6:
    case 7:
    case 8:
        echo "<br>for Q3 of ".$year;
        break;
    case 9:
    case 10:
    case 11:
        echo "for the<br>remainder of ".$year;
        break;
    case 12:
        ++$year;
        echo "<br>for Q1 of ".$year;
        break;
        };
}
?>

  <section class="cta-section h-36 sm:py-8" id="contact">
    <div class="cta-section__header sm:flex-row">

      <div class="cta-section__column-one md:justify-left sm:w-1/2 sm:mb-0">
        <h4 class="sm:text-left">Now Booking <?php wq(); ?>.</h4>
      </div>

      <div class="cta-section__column-two md:justify-right sm:w-1/2 sm:mb-0">
        <button class="cta-section__btn btn--dark" id="toggleContact">Let's Talk &#8594;</button>
      </div>

    </div>

    <div class="cta-section__form container" id="contactForm">
      <?php echo do_shortcode('[ninja_form id=1]'); ?>
    </div>
  </section>
