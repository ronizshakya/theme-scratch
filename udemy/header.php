<!doctype html>
<html>
	<head>
		<meta charset="utf-8"> 
		<title>udemy</title>
		
		<?php wp_head(); ?> 
	</head> 
		<?php
			
			if (is_front_page()):
					$awesome_classes=array('udemy-class','my-class');
			else:
					$awesome_classes=array('no-udemy-class');
			endif;
		?>
	<body <?php body_class($udemy_classes); ?>>
		<div class="container">
			<div class="row">
				<div class="col-xs-12"> 
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">ASHOKA HANDICRAFT</a>
					    </div>
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						    	<?php 
						    		wp_nav_menu(array(
							    		'theme_location'=>'primary',
							    		'container'=>false,
							    		'menu_class'=>'nav navbar-nav navbar-right'
							    		)
							     	);  
							    ?>
						    </div>

					    <!-- Collect the nav links, forms, and other content for toggling 
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					     
					      <form class="navbar-form navbar-right">
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="Search">
					        </div>
					        <button type="submit" class="btn btn-default">Submit</button>
					      </form>
					     <  <ul class="nav navbar-nav navbar-right">
					        <li><a href="#">Link</a></li>
					        
					      </ul>
					    </div>--><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>



					<!--
					<?php wp_nav_menu(array('theme_location'=>'primary')); ?>/*calls whatever menu u have crated in ur admin panel.it also have tons of parameters,theme location must me same'primary' as that which is declared in the funcition.php register_nav_menu */-->
					<!-- <?phpvar_dump(get_custom_header()); ?> to know whats the format of the image and its locations -->
				</div>
		<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
