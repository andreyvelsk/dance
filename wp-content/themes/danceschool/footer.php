<div class="footer">
			<div class="contacts">
				<span class="contacts_email">
					<?php 
							$email = the_field('email');
							echo $email; 
					?>
				</span>
				<span class="contacts_web">
					<?php 
							$site = the_field('site');
							echo $site; 
					?>
						
				</span>
			</div>

			<div class="developer">

				<span class="developer_name">
					Сайт разработан: 
				</span>
				
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