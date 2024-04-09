<?php get_header(); ?>
  <!-- Каталог -->

	<?php 
		$settings = get_posts( [
			'numberposts' => 1,
			'category_name' => 'settings',
			'post_type' => 'post'
		] );

		foreach ($settings as $post) {
			setup_postdata( $post );
			?>
				<div class="popular" style="background-image: url(<?= CFS()->get('catalog_bg') ?>)">
			<?php
		}
		wp_reset_postdata();
	?>
		<div class="container">
			<div class="row popular-title">
				<!-- single_cat_title - подставляет название категории -->
				<h2><?= single_cat_title(); ?></h2>
			</div>
			<div class="category-controll text-center">
				<button class="btn" type="button" data-filter="all">Все</button>
				<button class="btn" type="button" data-filter=".<?= get_category( 17, ARRAY_A )['slug']; ?>">
					<?= get_category( 17, ARRAY_A )['name']; ?>
				</button>
				<button class="btn" type="button" data-filter=".<?= get_category( 18, ARRAY_A )['slug']; ?>">
					<?= get_category( 18, ARRAY_A )['name']; ?>
				</button>
				<button class="btn" type="button" data-filter=".<?= get_category( 19, ARRAY_A )['slug']; ?>">
					<?= get_category( 19, ARRAY_A )['name']; ?>
				</button>
				<button class="btn" type="button" data-sort="order:asc">По возрастанию</button>
				<button class="btn" type="button" data-sort="order:descending">По убыванию</button>
			</div>
			<div class="row popular-goods catalog">
				<!-- Стандартный цикл WP, без него не работает пагинация -->
				<?php 
					if (have_posts()) {
						while(have_posts()) {
							the_post();
							$all_category = get_the_category();
							$res_name = '';

							foreach ($all_category as $category) {
								if ($category -> term_id == 17 
								|| $category -> term_id == 18 
								|| $category -> term_id == 19) {
									$res_name = $category -> slug;
								}
							}
							?>
								<div class="col-3 col-lg-6 col-sm-12 product mix <?= $res_name ?>" data-order="<?= CFS()->get('door_price'); ?>">
									<?= the_post_thumbnail( '' ); ?>
									<h3><?= the_title(); ?></h3>
									<div><?= CFS()->get('door_price'); ?> &#8381;</div>
									<!-- the_permalink() - вставляет ссылку на определенную запись -->
									<a href="<?= the_permalink(); ?>" class="btn"><?= CFS()->get('door_more'); ?></a>
								</div>
							<?php 
						}
					}
				?>

			</div>
			<!-- Выводится пагинация WP -->
			<?= the_posts_pagination(); ?>
		</div>
	</div>
<?php get_footer(); ?>