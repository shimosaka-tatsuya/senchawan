<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- 最新記事を取得 -->
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6
  );
  $st_query = new WP_Query( $args );
?>
<?php if ( $st_query->have_posts() ): ?>
  <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
    <?php the_time( 'Y年m月d日' ); ?><br />
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
  <?php endwhile; ?>
<?php else: ?>
  <p>新しい記事はありません</p>
<?php endif; ?>

<?php get_footer();
