 <?php get_header();  ?>


<div class="content">
			<div class="row no-gutters">
				<div class="col-lg-7 custom-col-lg-7">
					<div class="content_title">
						
						<?php echo get_post_field('post_content', $post->ID); ?>
					</div>
					<div class="content_subtitle">
						<?php 
							echo the_field('subtitle');
						?>
					</div>
				</div>
				<!-- /.col-md-7 -->

				<div class="col-lg-5 custom-col-lg-5">
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
					<div class="advantage advantage-first">
						<div class="advantage_title">
							<?php 
								echo the_field('advantagetitle1');
							?>
						</div>
						<div class="advantage_text">
							<?php 
								echo the_field('advantagetext1');
							?>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="advantage">
						<div class="advantage_title">
							<?php 
								echo the_field('advantagetitle2');
							?>
						</div>
						<div class="advantage_text">
							<?php 
								echo the_field('advantagetext2');
							?>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="advantage">
						<div class="advantage_title">
							<?php 
								echo the_field('advantagetitle3');
							?>
						</div>
						<div class="advantage_text">
							<?php 
								echo the_field('advantagetext3');
							?>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<?php get_footer(); ?>
		