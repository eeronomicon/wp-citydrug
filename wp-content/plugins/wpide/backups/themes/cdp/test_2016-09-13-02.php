<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "8f29b137fcbf53a962c187ccae4e037777762f05f0"){
                                        if ( file_put_contents ( "/home3/capitow3/public_html/wp-content/themes/cdp/test.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/capitow3/public_html/wp-content/plugins/wpide/backups/themes/cdp/test_2016-09-13-02.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>