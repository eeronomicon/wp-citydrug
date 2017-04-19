<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8f29b137fcbf53a962c187ccae4e0377f272a400f4"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cdp/page-welcome.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cdp/page-welcome_2016-12-21-03.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php get_header(); ?>
<?php $h = $post->ID;  ?>

<header id="hp-hero"  class="clearfix">

  <?php include(locate_template('/inc/herobar.php')); ?>

  <div id="hp-slides" class="clearfix">

    <?php $slides = get_field('slides', $post->ID); foreach ($slides as $slide) { ?>

    <div class="hp-slide clearfix" style="background:url(<?php echo $slide['stock']; ?>) top center no-repeat; background-size: cover;">
       <div class="col-lg-10 col-lg-offset-1 clearfix" id="hero-intro">
        <div class="col-sm-2" id="hero-cherub">
          <span class="cherub"></span>
        </div>
        <div class="col-sm-10 col-md-9" id="hero-titles">
          <h2><?php echo $slide['title']; ?></h2>
          <p class="excerpt"><?php echo $slide['intro']; ?></p>
          <div id="home-ctas" class="clearfix">
            <nav class="nopad">
              <ul class="nav nav-pills">
                <?php $ctas = $slide['ctas']; foreach($ctas as $cta) { ?>
                <li><a href="<?php echo $cta['url']; ?>" class="shadow"><span class="cta-stock" style="background:url(<?php echo $cta['stock']; ?>) top center no-repeat; background-size:contain;"></span> <br> <?php echo $cta['title']; ?></a></li>
                <?php } ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

  </div>

  <div id="hp-anchors"></div>

</header>

  <article class="lyt-center clearfix">
    <div class="col-lg-8 col-lg-offset-2 content">
        <?php the_field('logo_sub_text', 'option') ?>
    </div>
    <div class="col-lg-8 col-lg-offset-2 content">
      <h2>New Prescriptions Welcomed</h2>

      <p>Whether you are a new client or a returning client we will work to help you integrate new prescriptions into your life style. </p>

      <a href="/rx-orders/new-prescriptions/" class="btn btn-cta">Get Started</a>
    </div>
  </article>

<?php get_template_part('inc/end', '' ); ?>
        
<?php get_footer(); ?>
