<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0e1ed40b7159604338c4bf19ffce94eb9ac48903f3"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cwp/inc/bar.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cwp/inc/bar_2016-09-15-00.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div class="col-lg-11 col-lg-offset-1 clearfix" id="hero-bar">

    <div class="col-sm-3 col-md-5 col-lg-4" id="hero-logo">
      <a href="#" class="logo"><h1 class="shadow"><strong>Clayworth <span>Pharmacy</span></strong></h1></a>
      <span class="shadow">Medication Management • Medical Supplies • Long Term Care</span>
    </div>
  
    <div class="col-sm-9 col-md-7 col-lg-8 clearfix shadow" id="hero-tools">
      <div id="hero-options">
        <a href="#">Castro Valley</a>
        <span class="fa fa-circle"></span>
        <a href="#">San Leandro</a>
        <span class="fa fa-circle"></span>
        <a href="#">510 537 9402</a>
        <span class="fa fa-circle"></span>
        <a href="#">info@clayworthpharmacy.com</a>
        <span class="fa fa-circle"></span>
      </div>
      <div id="hero-social" class="social shadow">
        <a href="#"><span class="fa fa-facebook"></span></a>
        <a href="#"><span class="fa fa-twitter"></span></a>
        <a href="#"><span class="fa fa-foursquare"></span></a>
        <a href="#"><span class="fa fa-yelp"></span></a>
      </div>


      <nav id="hero-menu" class="clearfix">
      
      <a href="#" id="hero-dropmenu" class="visible-xs col-xs-6">
       <span class="fa fa-bars"></span> Site Menu
      </a>
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