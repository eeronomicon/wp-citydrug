<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8f29b137fcbf53a962c187ccae4e03776af09900e0"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cdp/inc/herobar.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cdp/inc/herobar_2016-09-15-00.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php if($h == 253){$barclass = 'hp-hero-bar'; } else { $barclass = 'hero-bar'; } ?>
<div id="<?php echo $barclass; ?>">
  <div class="col-lg-11 col-lg-offset-1 clearfix">
    <div class="col-sm-6 col-md-4" id="hero-logo">
      <a href="/" class="logo"><h1>CapitolDrugs</h1></a>
      <span><?php echo get_bloginfo('description' ); ?></span>
    </div>
    <div class="col-sm-6 col-md-8" id="hero-tools">
      <div id="hero-options">
        <a href="/locations/west-hollywood/">West Hollywood</a>
        <span class="fa fa-circle"></span>
        <a href="/locations/sherman-oaks/">Sherman Oaks</a>
        <span class="fa fa-circle"></span>
        <a href="tel:<?php echo preg_replace("/[^0-9]/","",get_field('ref_phone', 'option')); ?>"><?php echo get_field('ref_phone', 'option'); ?></a>
        <span class="fa fa-circle"></span>
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
