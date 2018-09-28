<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	<?php the_title(); ?>
	</title>
	
<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="row no-gutters">
				<div class="col-lg-2 col-md-6 col-5">
					<div class="logo">
						<?php 

						$image = get_field('logo');

						if( !empty($image) ): ?>

						    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>

					</div>
				</div>
			
				<div class="col-lg-5 col-md-6 header_text">
					
					<?php 
							$headertitle = the_field('headertitle');
							echo $headertitle; 
					?>
					
				</div>
			
				<div class="col-lg-5 col-md-6 col-7 callback">
					<span class="callback_phone">
					<i class="phone"></i>
					<?php 
							$phone = the_field('phone');
							echo $phone; 
					?>
					</span>

					<a href="#" data-toggle="modal" data-target="#project1">
					<div class="callback_btn">
						Заказать звонок
					</div>
					</a>
				</div>
			</div>
		</div>