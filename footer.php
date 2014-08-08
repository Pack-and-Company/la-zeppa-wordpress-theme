</div>
<!-- end of content left (main content column) -->
<!-- sidebar -->
<div id="sidebar">
</div>
<!-- end of sidebar -->

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
	<p>33 Drake St Freemans Bay Auckland : Tel. 09 379-8167 : Open Monday to Thursday from 4pm, Friday to Sunday from 12pm.</p>
	<div id="footerlinks">
	    <?php
        $defaults = array(
          'theme_location' => 'primary',
          'container' => false
        )
        wp_nav_menu( $defaults );
      ?>
	</div> 
</div>       
<!-- end of footer -->

<?php wp_footer(); ?>
</body>
</html>