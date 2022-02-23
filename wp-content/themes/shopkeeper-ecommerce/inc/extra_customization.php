<?php 

	$modern_ecommerce_sticky_header = get_theme_mod('modern_ecommerce_sticky_header');

	$modern_ecommerce_custom_style= "";

	if($modern_ecommerce_sticky_header != true){

		$modern_ecommerce_custom_style .='.menu_header.fixed{';

			$modern_ecommerce_custom_style .='position: static;';
			
		$modern_ecommerce_custom_style .='}';
	}

	/*---------------------------Width -------------------*/
	
	$modern_ecommerce_theme_width = get_theme_mod( 'modern_ecommerce_width_options','full_width');

    if($modern_ecommerce_theme_width == 'full_width'){

		$modern_ecommerce_custom_style .='body{';

			$modern_ecommerce_custom_style .='max-width: 100%;';

		$modern_ecommerce_custom_style .='}';

	}else if($modern_ecommerce_theme_width == 'container'){

		$modern_ecommerce_custom_style .='body{';

			$modern_ecommerce_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

		$modern_ecommerce_custom_style .='}';

	}else if($modern_ecommerce_theme_width == 'container_fluid'){

		$modern_ecommerce_custom_style .='body{';

			$modern_ecommerce_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

		$modern_ecommerce_custom_style .='}';

	}