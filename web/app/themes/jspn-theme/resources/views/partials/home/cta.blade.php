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
{{-- #cta --}} {{----–-----–-----–-----–-----–-----–-----–-----–-----}}
  <section id="contact" class="sm:py-8 py-4 bg-gray-700 -mb-16 flex flex-wrap h-36 mt-32 shadow-2xl z-10 relative">
    <div class="px-16 w-full sm:flex-row flex-col flex justify-between">

      {{-- #col1 --}}
      <div class="w-full sm:w-1/2 sm:mb-0 mb-2 mr-10 flex justify-center md:justify-left">
        <h4 class="text-center sm:text-left font-bold self-center text-2xl text-gray-100">Now Booking <?php wq(); ?>.
        </h4>
      </div>
      {{-- /col1 --}}

      {{-- #col2 --}}
      <div class="w-full sm:w-1/2 sm:mb-0 mb-2 flex justify-center md:justify-right">
        <button class="btn--dark self-center" id="toggleContact">Let's Talk &#8594;</button>
      </div>
      {{-- /col2 --}}
    </div>
    <div class="container flex hidden" id="contactForm">
      <?php echo do_shortcode('[ninja_form id=1]'); ?>
    </div>
  </section>
{{-- /cta --}} {{----–-----–-----–-----–-----–-----–-----–-----–-----}}
