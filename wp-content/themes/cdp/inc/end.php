<footer id="end" class="clearfix ">
  <div class="col-lg-10 col-lg-offset-1 clearfix">
    <div class="col-sm-6 col-md-4" id="end-social">
      <a href="/"><img src="/wp-content/themes/cdp/assets/i/logo.svg" alt="City Drug" class="logo" style="width: 90%"></a>

      <div class="social">
      <?php $sms = get_field('sm_profiles', 'option'); foreach ($sms as $sm) { ?>
        <a href="<?php echo $sm['url']; ?>"><span class="fa <?php echo $sm['icon']; ?>"></span></a>
      <?php } ?> Follow Us on Facebook!
      </div>

      <div id="end-credits">
        Copyright © <?php echo date('Y'); ?> City Drug. All rights reserved. Website by <a href="https://www.inboundrx.com" target="_new">InboundRx</a>.
      </div>

    </div>
    <div class="col-sm-6 col-md-8 clearfix" id="end-contact">
      <div class="col-md-4">
        <h3>City Drug</h3>
        <a href="/">1512 Linwood Dr<br>Paragould, AR 72450</a>
        <a href="tel:<?php echo preg_replace("/[^0-9]/","",get_field('wh_phone', 'option')); ?>"><?php echo get_field('wh_phone', 'option'); ?></a>
      </div>

      <div class="col-md-5">
        <h3>Store Hours</h3>
        <a href="/">M-F 8:30AM–6PM<br>Saturday 8:30AM–12PM<br>Sunday Closed</a>
        <a href="tel:<?php echo preg_replace("/[^0-9]/","",get_field('so_phone', 'option')); ?>"><?php echo get_field('so_phone', 'option'); ?></a>
      </div>

      <div class="col-md-3">
        <h3>Refills/Orders</h3>
        <a href="tel:<?php echo preg_replace("/[^0-9]/","",get_field('ref_phone', 'option')); ?>"><?php echo get_field('ref_phone', 'option'); ?></a>
      </div>

    </div>
  </div>
</footer>