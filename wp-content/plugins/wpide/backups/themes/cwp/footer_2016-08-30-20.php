<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0e1ed40b7159604338c4bf19ffce94ebcce1fc73f5"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cwp/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cwp/footer_2016-08-30-20.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php wp_footer(); ?>

<script>
jQuery(document).ready(function($) {
  $("#hero-menu a[href='#service-7']").click(function(e){
    $("#service-tab-links a[href='#service-7']").tab('show');
  });
});
</script>

</body></html>
