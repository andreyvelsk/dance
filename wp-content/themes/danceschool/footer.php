<div class="footer">
			<div class="contacts">
				<?php $email = get_option('admin_email'); ?>
				<a href="mailto:<?php echo $email; ?>"><span class="contacts_email">
						<?php 
								echo $email; 
						?>
					</span>
				</a>

				<a href="/"><span class="contacts_web">
						<?php 
								echo the_field('site');
						?>
							
					</span></a>
			</div>

			<div class="developer">

				<a href="http://alfa-mg.com" target="_blank">
					<span class="developer_name">
						Сайт разработан: 
					</span>
				</a>
				
			</div>
</div>


			<div id="project1" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content form">
						<div class="modal-body">
							<span class="form_title">Заказать звонок</span>
							<?php 
							echo do_shortcode('[contact-form-7 id="34" title="callback"]');
							?>
						</div>
				
					</div>
					<!-- /.модальное окно-Содержание -->
				</div>
				<!-- /.модальное окно-диалог -->
			</div>
			<!-- /.модальное окно -->

	</div>
<?php wp_footer(); ?>
</body>
</html>