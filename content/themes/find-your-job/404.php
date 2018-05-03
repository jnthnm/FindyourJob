<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Tu n est pas au bon endroit.', 'findjob' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'tu est égaré tel une brebis , je t invite a retourner en arrières', 'findjob' ); ?></p>

					<?php
					get_search_form();
					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'findjob' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     =>6,
							) );
							?>
						</ul>
					</div><!-- .widget -->

				</div><!-- page-content -->
			</section><!-- error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

 <?php  if (is_user_logged_in()) { ?>

    <?php $user=wp_get_current_user(); ?>

    BIENVENUE <?php echo $user->user_login; ?>

 <a href="<?php echo wp_logout_url();?>">Se deconnecter</a>

<?php }else{  ?>
    <?php wp_loginform(); ?>
<?php } ?>


<?php get_footer();?> -->
