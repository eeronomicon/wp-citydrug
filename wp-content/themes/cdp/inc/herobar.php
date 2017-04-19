<?php if($h == 253){$barclass = 'hp-hero-bar'; } else { $barclass = 'hero-bar'; } ?>
<div id="<?php echo $barclass; ?>">
  <div class="col-lg-11 col-lg-offset-1 clearfix">
    <div class="col-sm-6 col-md-4" id="hero-logo">
      <a href="/"><img src="/wp-content/themes/cdp/assets/i/logo.svg" alt="City Drug" class="logo"></a>
    </div>
    <div class="col-sm-6 col-md-8" id="hero-tools">
      <div id="hero-options">
        <a href="/">1512 Linwood Dr, Paragould, Arkansas 72450</a>
        <span class="fa fa-circle"></span>
        <a href="tel:(870) 236-8501">(870) 236-8501</a>
      </div>
      <div id="hero-social" class="social">

      <?php $sms = get_field('sm_profiles', 'option'); foreach ($sms as $sm) { ?>
        <a href="<?php echo $sm['url']; ?>"><span class="fa <?php echo $sm['icon']; ?>"></span></a>
      <?php } ?>
    
      </div>

      <div id="hero-drop" class="visible-sm visible-xs">
        <a href="#"><span class="fa fa-bars"></span> Site Menu </a>
      </div>

      <nav id="hero-menu">

      <div id="hero-menu-close" class="visible-sm visible-xs">
        <a href="#"><span class="fa fa-close"></span></a>
      </div>

      <?php 

        $args = array(
          'theme_location' => 'Top Menu',
          'menu' => 'Top Menu',
          'after' => '',
          'container' => '',
          'items_wrap' => '<ul class="nav nav-pills">%3$s</ul>'
          );

        wp_nav_menu($args);

       ?>
       
      </nav>
    </div>
  </div>
</div>
