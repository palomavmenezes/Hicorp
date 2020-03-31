<?php

	/**
	 * NO-RESULTS TEMPLATE
	 */

?>

	<section class="post-list">

		<?php if(is_search()){ ?>
			<nav class="pagination pagination-noresults">
				<span class="pagination-button"><i class="fa fa-close"></i><?php esc_html_e('em resultados', 'hicorp'); ?>: <?php esc_html_e('Por favor, busque por outra palavra chave.', 'hicorp'); ?></span>
			</nav>
		<?php }else{ ?>
			<nav class="pagination pagination-noresults">
				<span class="pagination-button"><i class="fa fa-close"></i><?php esc_html_e('Sem resultados', 'hicorp'); ?>: <?php esc_html_e('Por favor, busque por outra palavra chave.', 'hicorp'); ?></span>
			</nav>
		<?php } ?>

	</section>
