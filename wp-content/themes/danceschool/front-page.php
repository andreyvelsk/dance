 <?php get_header();  ?>


<div class="content">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="content_title">
						
						<?php echo get_post_field('post_content', $post->ID); ?>
					</div>
					<div class="content_subtitle">
						<?php 
							$subtitle = the_field('subtitle');
							echo $subtitle; 
						?>
					</div>
				</div>
				<!-- /.col-md-7 -->

				<div class="col-lg-5">
					<div class="form">
						<span class="form_title">Записаться на занятие</span>
						<?php 
						echo do_shortcode('[contact-form-7 id="31" title="Main"]');
						?>
					</div>
				</div>
				<!-- /.col-md-5 -->
			</div>
		</div>
		<!-- /.content -->

		<div class="advantages">
			<div class="row">
				<div class="col-md-4">
					<div class="advantage">
						<div class="advantage_title">
							Опыт работы<br> 
							более 15 лет
						</div>
						<div class="advantage_text">
							Профессиональный хореограф, мастер арабского танца с опытом более 15 лет, выступал на международных конкурсах, был членом жюри. Более 10 000 успешных учеников.
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="advantage">
						<div class="advantage_title">
							Полезно для женского здоровья
						</div>
						<div class="advantage_text">
							Восточный танец не только красив, но и полезен для здоровья вашего ребёнка за счет множества специфических движений
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="advantage">
						<div class="advantage_title">
							Танцевать <br>
							может каждая
						</div>
						<div class="advantage_text">
							Ваш ребёнок может не иметь специальной подготовки, танцевать восточный танец сможет каждая девочка вне зависимости от возраста и уровня подготовки.
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<?php get_footer(); ?>
		