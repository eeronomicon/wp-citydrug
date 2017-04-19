<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0e1ed40b7159604338c4bf19ffce94ebf5a5e9bc4e"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cwp/view-services.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cwp/view-services_2016-08-31-01.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Services */ ?>
<?php $p = $page->ID; ?>
<?php $services = get_field('services', $p); ?>

<section id="service" class="clearfix">
  <article class="col-md-10 col-md-offset-1 clearfix">
    <header>
      <span class="tag"><?php echo $page->post_title; ?></span>
      <h1><strong><?php echo get_field('title', $p); ?></strong></h1>
    </header>
    <div class="title-hr"></div>
    <div id="service-tabs" class="clearfix">


      <div class="col-xs-4 col-sm-5 col-md-4 col-lg-2 nopad" id="service-tab-links">
        <ul class="nav" role="tablist">

        <?php $i=1; foreach($services as $skey=>$service) { ?>
          <li role="presentation" <?php if($skey == 0){echo 'class="active"'; } ?>><a href="<?php echo '#service-'.$i++; ?>" role="tab" data-toggle="tab"><?php echo $service['title']; ?></a>
          <span class="service-on" <?php if($skey==0){echo 'style="display:block;"';} ?>>
            <?php echo $service['menu_intro']; ?>
          </span>
          </li>
        <?php } ?>


        </ul>
      </div>

      <div class="col-xs-8 col-sm-7 col-md-8 col-lg-9 col-lg-offset-1 nopad" id="service-tab-panels">

      <div class="tab-content">
        
      <?php $t=1; foreach($services as $skey=>$service) {  ?>

        <div class="service-panel tab-pane fade <?php if($skey==0){echo 'in active'; } ?>" role="tabpanel" id="<?php echo 'service-'.$t++; ?>">

          <h3><?php echo $service['subtitle']; ?></h3>

          <div class="clearfix flex">

          <?php $items = $service['items']; foreach ($items as $item){ ?>

            <div class="col-sm-6 col-md-4 service-panel-item">
              <span class="fa <?php echo $item['icon']; ?>"></span>
              <h4><?php echo $item['title']; ?></h4>
              <div class="title-hr"></div>
              <?php echo $item['copy']; ?>
            </div>

          <?php } ?>

          </div>

        </div>

    <?php } ?>

      </div>
        
        <?php $has_btn = get_field('button_label', $p); if($has_btn){ ?>
        <div class="service-cta">
          <a href="<?php echo get_field('button_url', $p); ?>" class="btn btn-cta"><?php echo $has_btn; ?></a>
        </div>
        <?php } ?>

      </div>
    </div>
  </article>
  <div class="wave-even"></div>
</section>