
<div class="clearFrame"></div>
</div>
<!-- end of content -->

<div class="push"></div>
</div>
<!-- end of content wraper -->

</div>
<!-- end of wrapper -->

<!-- footer -->
<div id="footer">
	<p>33 Drake St Freemans Bay Auckland : Tel. 09 379-8167<br />Open Tuesday to Thursday from 4pm, Friday from 12pm, Saturday from 3pm, Sunday from 12pm.</p>
	<div id="footerlinks">
      <ul>
	    <?php
        $defaults = array(
          'theme_location' => 'primary',
          'container' => false,
          'items_wrap' => '%3$s'
        );
        wp_nav_menu( $defaults );
      ?>
      	<li><a href="https://www.facebook.com/pages/La-Zeppa/211822002145"><img src="<?=get_template_directory_uri();?>/images/facebook36x36.png" /></a></li>
	    <li><a href="http://twitter.com/#!/LaZeppaBar"><img src="<?=get_template_directory_uri();?>/images/twitter36x36.png"></a></li>
      </ul>
	</div> 
</div>       
<!-- end of footer -->

<?php wp_footer(); ?>
</body>
</html>