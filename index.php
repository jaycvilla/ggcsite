<?php get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image bottom" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Reaching New Heights</h1>
        <h2 class="headline headline--medium">Take Your Business To The Next Level</h2>
        <a href="#" class="btn btn--medium btn--blue">Apply Now</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Loan Information</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="<?php echo site_url('/loan-type') ?>">
              <span class="event-summary__month">Loan</span>
              <span class="event-summary__day">Type</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url('/loan-type') ?>">Finding the Right Loan</a></h5>
              <p>Educate yourself with detailed descriptions of every opportunity available to you prior to committing to your business' future.  <a href="#" class="nu gray"> <br>Learn more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="<?php echo site_url('/loan-calculator') ?>">
              <span class="event-summary__month">Loan</span>
              <span class="event-summary__day">Calc</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url('/loan-calculator') ?>">Loan Calculator</a></h5>
              <p>Calculate your potential loan; estimate your potential payments for a specific period. <a href="<?php echo site_url('/loan-calculator') ?>" class="nu gray"><br>Learn more</a></p>
            </div>
          </div>

          <?php /*<p class="t-center no-margin"><a href="#" class="btn btn--small btn--blue">Apply now</a></p> */ ?>


        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Questionnaire</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="<?php echo site_url('/questionnaire') ?>">
              <span class="event-summary__month">Take a</span>
              <span class="event-summary__day">Quiz</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url('/questionnaire') ?>">Try Our Quiz</a></h5>
              <p>The quiz will make us better understand how to further your business by finding and personalizing your loan program to get the capital you need in your hands fast. <br><br><br> These questions relate to your current business and personal finances; we will be able to secure after qualifying you with one of our hundreds of lenders. <a href="<?php echo site_url('/questionnaire') ?>" class="nu gray"><br>Read more</a></p>
            </div>
          </div>

            <?php /*<p class="t-center no-margin"><a href="<?php echo site_url('/loan-type') ?>" class="btn btn--small btn--blue">Loan Type </a></p> */ ?> 

        
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Easy Application Process</h2>
                <p class="t-center">Online access to a profile and approvals guaranteed within the day</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Get Your Money Fast</h2>
                <p class="t-center">At approval, get your funds wired into your account. <br>Instant Funds at unbeatable Rate</p>
              
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Build Your Business with Us</h2>
                <p class="t-center">We expect us to be in business for the long run. <br> Let's grow together.</p>
                <p class="t-center no-margin"><a href="<?php echo site_url('/login') ?>" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>
    
<?php get_footer(); 
?>



