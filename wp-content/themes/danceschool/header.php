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

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter50556952 = new Ya.Metrika2({ id:50556952, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/50556952" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

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
					
					<p>
						<?php 
								$headertitle = the_field('headertitle');
								echo $headertitle; 
						?>
							
						</p>
					
				</div>
			
				<div class="col-lg-5 col-md-6 col-7 callback">
					
					<a id="call" href="tel: <?php echo the_field('phone'); ?>">
						<span class="callback_phone">
						<?php 
								echo the_field('phone');
						?>
						</span>
					</a>

					<a href="#" data-toggle="modal" data-target="#project1">
					<div class="callback_btn">
						Заказать звонок
					</div>
					</a>
				</div>
			</div>
		</div>