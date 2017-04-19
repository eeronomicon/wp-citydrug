<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8f29b137fcbf53a962c187ccae4e03770136bfca35"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cdp/page.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cdp/page_2016-08-26-17.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php get_header(); ?>

<?php 
$p = $post->ID; $h = $post->ID;
if($post->post_parent) { $pp = $post->post_parent; }else{ $pp = $post->ID; } 
$subpages = get_pages('child_of='.$pp.'&sort_column=menu_order&sort_order=asc');
if(get_field('hero')){$hero = get_field('hero');} else {$hero = fp_stocker('hero.jpg'); }
?>

<header id="hero" style="background:url(<?php echo $hero; ?>) bottom center no-repeat; background-size:cover;" class="clearfix">
  
  <?php include(locate_template('/inc/herobar.php')); ?>

  <div class="col-lg-10 col-lg-offset-1 clearfix" id="hero-intro">
    <div class="col-sm-2" id="hero-cherub">
      <span class="cherub"></span>
    </div>
    <div class="col-sm-10 col-md-9" id="hero-titles">
      <h2><?php echo get_the_title($pp); ?></h2>
      <p class="excerpt"><?php $pcopy = get_post($pp); echo $pcopy->post_content; ?></p>
      <div id="hero-submenu" class="clearfix">
        <nav class="col-sm-6 col-lg-4 nopad">
          <ul class="nav">
            <?php foreach($subpages as $subpage) { ?>
            <?php } ?>
          </ul>
        </nav>
        <div class="col-sm-6 col-lg-8">
          <p class="intro shadow">
            <?php echo get_field('intro'); ?>
          </p>

          <?php if(get_field('cta_label')) { ?>
          <div id="hero-cta" style="text-align: center;">
            <a href="<?php echo get_field('cta_url'); ?>" class="btn btn-cta col-md-8 col-md-offset-4" style="white-space: initial;"><?php echo get_field('cta_label'); ?></a>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</header>

<main id="layouts">

<?php if(have_rows('layout')) { while(have_rows('layout')) : the_row(); ?>

  <?php if(get_row_layout() == 'lyt_intro') { ?>

  <article class="lyt-top clearfix">
    <div class="top-title">
      <h3><?php echo get_the_title($p); ?></h3>
      <p><?php echo get_sub_field('subtitle'); ?></p>
    </div>

    <div class="col-md-6 col-lg-5 top-stock clearfix">
      <?php if(get_sub_field('stock')) { ?>
      <div id="stock-container" style="background:url(<?php echo get_sub_field('stock'); ?>) top right no-repeat; background-size:contain;"></div>
      <?php } ?>
      <div id="stock-caption" class="col-lg-6 col-lg-offset-4" style="margin-top: 40px;">
        <span class="fa fa-lightbulb-o"></span>
        <p><?php echo get_sub_field('idea'); ?></p>
      </div>
    </div>

    <div class="col-md-6 col-lg-7 content clearfix">

      <div class="col-lg-7 col-lg-offset-1">
        <h1><?php echo get_sub_field('copy_title'); ?></h1>
      </div>
      
      
      <div class="col-sm-8 col-lg-7 col-lg-offset-1">

       <?php echo apply_filters('the_content()', get_sub_field('copy') ); ?>

        <div class="branch"></div>

      </div>

      <div class="col-sm-4 col-md-6 col-lg-3 col-lg-offset-1 sidebar">
        <span class="fa fa-map-marker"></span>
        <p><?php echo get_sub_field('visit'); ?></p>
        <p>West Hollywood
            <a href="tel:<?php echo preg_replace("/[^0-9]/","",get_field('wh_phone', 'option')); ?>"><?php echo get_field('wh_phone', 'option'); ?></a>
            <a href="<?php echo get_field('wh_map', 'option'); ?>">map &amp; directions</a>
        </p>
        <p>Sherman Oaks
            <a href="tel:<?php echo preg_replace("/[^0-9]/","",get_field('so_phone', 'option')); ?>"><?php echo get_field('so_phone', 'option'); ?></a>
            <a href="<?php echo get_field('so_map', 'option'); ?>">map &amp; directions</a>
        </p>
        <p>Orders &amp; Refills
          <a href="tel:<?php echo preg_replace("/[^0-9]/","",get_field('ref_phone', 'option')); ?>"><?php echo get_field('ref_phone', 'option'); ?></a>
        </p>
      </div>
    </div>
  </article>

<?php } elseif(get_row_layout() == 'lyt_cols' ) { ?>

  <article class="lyt-left clearfix height">
    <div class="col-md-8 col-lg-7 content">

        <div class="col-lg-10 col-lg-offset-1 clearfix">

        <h1><?php echo get_sub_field('copy_title'); ?></h1>

        <?php echo apply_filters('the_content()', get_sub_field('copy') ); ?>

        <div class="branch"></div>

        </div>

    </div>

    <?php if(get_sub_field('stock')) {$colStock = get_sub_field('stock'); } else { $colStock = fp_stocker('stock-2.jpg'); } ?>

    <div class="col-md-4 col-lg-5 stock flush" style="background:url(<?php echo $colStock; ?>) top center no-repeat; background-size:cover;">
      
      <cite><?php echo get_sub_field('caption'); ?></cite>

      <div class="caption">
        <span class="fa fa-bolt"></span>
        <h3><?php echo get_sub_field('action'); ?></h3>
      </div>

    </div>

  </article>

<?php } elseif(get_row_layout() == 'lyt_center' ) { ?>

  <article class="lyt-center clearfix">

    <div class="col-lg-8 col-lg-offset-2 content">
      <h2><?php echo get_sub_field('title'); ?></h2>
      <?php echo apply_filters('the_content()', get_sub_field('copy') ); ?>

      <?php if(get_sub_field('label')) { ?>
      <a href="<?php echo get_sub_field('url'); ?>" class="btn btn-cta"><?php echo get_sub_field('label'); ?></a>
      <?php } ?>

    </div>
    
  </article>

<?php } endwhile; } ?>

</main>

<?php get_template_part('inc/end', '' ); ?>
				
<?php get_footer(); ?>
