<? if(!isset($_COOKIE['cojones-banner'])) :?>

    	<?php 

			function set_cojones_cookie() {
  				setcookie( 'cojones-banner', true, 30 * DAYS_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN );
			}

			add_action( 'init', 'set_cojones_cookie' );

		?>
		
		<div class="title-banner hidden">
		<? echo $_COOKIE['cojones-banner'];?>
			<img src="<? echo get_template_directory_uri() . '/cojones-logo.svg'?>" class="img-responsive"/>
		</div>

		<div class="blur-overlay hidden"></div>    

<? endif;?>
