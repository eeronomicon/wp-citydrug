<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0e1ed40b7159604338c4bf19ffce94eb1c6e27b56e"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cwp/view-intro.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cwp/view-intro_2016-08-23-16.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>