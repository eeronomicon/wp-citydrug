<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0e1ed40b7159604338c4bf19ffce94ebf5a5e9bc4e"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cwp/view-refills.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cwp/view-refills_2016-08-31-02.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Refills */ ?>
<?php $p = $page->ID; ?>

<section id="refill" class="clearfix container-fluid">

  <article class="col-md-10 col-md-offset-1 clearfix">

    <header>
      <span class="tag"><?php echo $page->post_title; ?></span>
      <h1><strong><?php echo get_field('title', $p); ?></strong></h1>
    </header>

    <div class="clearfix">
      <div class="col-md-7 col-lg-8 nopad">
          <?php echo get_field('copy', $p); ?>
      </div>
    </div>

  </article>
  <div class="wave-odd"></div>
</section>