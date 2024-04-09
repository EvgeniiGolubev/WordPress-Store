<?php 
/*
Template Name: Полезна информация
*/
get_header(); 
?>
  <!-- Полезная информация -->
  <div class="information_page">
    <div class="container">
	  <!-- Кованная полоса -->
      <div class="row information_title">
        <div class="col-12">
          <h2><?= get_category(10, ARRAY_A)['name']; ?></h2>
        </div>
      	</div>
			<div class="row information_grid">
				<!-- Берем посты из категории в цикле -->
				<?php 
					$posts = get_posts( [
					'numberposts' => -1,
					'category_name' => 'forged_strip',
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true,
					] );

					foreach ($posts as $post) {
					setup_postdata( $post );   
				?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?= the_post_thumbnail( '' ); ?>
						<h3><?= the_title(); ?></h3>
					</div>
          		<?php } wp_reset_postdata() ?>
								
			</div>
		<!-- Ручки -->
		<div class="row information_title">
			<div class="col-12">
			<h2><?= get_category(11, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
			<div class="row information_grid">
				<!-- Берем посты из категории в цикле -->
				<?php 
					$posts = get_posts( [
					'numberposts' => -1,
					'category_name' => 'handles',
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true,
					] );

					foreach ($posts as $post) {
					setup_postdata( $post );   
				?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?= the_post_thumbnail( '' ); ?>
						<h3><?= the_title(); ?></h3>
					</div>
          		<?php } wp_reset_postdata() ?>
			</div>
		<!-- Элементы ковки -->
		<div class="row information_title">
			<div class="col-12">
			<h2><?= get_category(12, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
			<div class="row information_grid">
				<!-- Берем посты из категории в цикле -->
				<?php 
					$posts = get_posts( [
					'numberposts' => -1,
					'category_name' => 'forging_elements',
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true,
					] );

					foreach ($posts as $post) {
					setup_postdata( $post );   
				?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?= the_post_thumbnail( '' ); ?>
						<h3><?= the_title(); ?></h3>
					</div>
          		<?php } wp_reset_postdata() ?>
			</div>
		<!-- Цвет -->
		<div class="row information_title">
			<div class="col-12">
			<h2><?= get_category(13, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
			<div class="row information_grid">
				<!-- Берем посты из категории в цикле -->
				<?php 
					$posts = get_posts( [
					'numberposts' => -1,
					'category_name' => 'color',
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true,
					] );

					foreach ($posts as $post) {
					setup_postdata( $post );   
				?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?= the_post_thumbnail( '' ); ?>
						<h3><?= the_title(); ?></h3>
					</div>
          		<?php } wp_reset_postdata() ?>
			</div>
		<!-- Рисунок МДФ 10мм -->
		<div class="row information_title">
			<div class="col-12">
			<h2><?= get_category(14, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
			<div class="row information_grid">
				<!-- Берем посты из категории в цикле -->
				<?php 
					$posts = get_posts( [
					'numberposts' => -1,
					'category_name' => 'mdf_10',
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true,
					] );

					foreach ($posts as $post) {
					setup_postdata( $post );   
				?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?= the_post_thumbnail( '' ); ?>
						<h3><?= the_title(); ?></h3>
					</div>
          		<?php } wp_reset_postdata() ?>
			</div>
		<!-- Рисунок МДФ 16мм -->
		<div class="row information_title">
			<div class="col-12">
			<h2><?= get_category(15, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
			<div class="row information_grid">
				<!-- Берем посты из категории в цикле -->
				<?php 
					$posts = get_posts( [
					'numberposts' => -1,
					'category_name' => 'mdf_16',
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true,
					] );

					foreach ($posts as $post) {
					setup_postdata( $post );   
				?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?= the_post_thumbnail( '' ); ?>
						<h3><?= the_title(); ?></h3>
					</div>
          		<?php } wp_reset_postdata() ?>
			</div>
		<!-- Цвета МДФ -->
		<div class="row information_title">
			<div class="col-12">
			<h2><?= get_category(16, ARRAY_A)['name']; ?></h2>
			</div>
		</div>
			<div class="row information_grid">
				<!-- Берем посты из категории в цикле -->
				<?php 
					$posts = get_posts( [
					'numberposts' => -1,
					'category_name' => 'color_mdf',
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true,
					] );

					foreach ($posts as $post) {
					setup_postdata( $post );   
				?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?= the_post_thumbnail( '' ); ?>
						<h3><?= the_title(); ?></h3>
					</div>
          		<?php } wp_reset_postdata() ?>
			</div>
    	</div>
  </div>
<?php get_footer(); ?>