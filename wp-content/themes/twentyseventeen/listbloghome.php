<?php
   /**   
      * The template for displaying all pages      
      * This is the template that displays all pages by default.
      * Please note that this is the WordPress construct of pages and that other   
      * 'pages' on your WordPress site will use a different template.   
      * Template Name: listbloghome
   
      * @package WordPress   
      * @subpackage Twenty_Thirteen   
      * @since Twenty Thirteen 1.0
    */
$currentlang = get_bloginfo('language');
$texbtn = 'view more';
if ($currentlang == 'es') {
  $texbtn = 'ver más';
}
$args = array(
  'category_name'=>'blog',
  'posts_per_page'=> 3,
  'orderby' => 'date',
  'order' => 'DESC' );
$query = new WP_Query( $args );
$cont = 1; 
$divsecu = false;
?>
<div class="home-blog">
<?php while ( $query->have_posts() ) : $query->the_post(); 
  if ($cont==1){ ?>
    <div class="home-blog-princi">
      <div><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" /></div>
      <div class="home-blog-princi-padding">
        <div class="fecha-blog"><?php echo get_the_date(); ?></div>
        <h4><?php echo get_the_title(); ?></h4>
        <p><?php the_excerpt(); ?></p>
        <div class="btn"><a class="btn-interna" href="<?php echo get_permalink(); ?>"><span class="texto-btn"><?php echo $texbtn; ?></span><span class="estilo-mas">+</span></a></div>
      </div>
    </div>
  <?php }else{ 
    if ($cont==2) { 
        $divsecu = true;
      ?>
      <div class='home-blog-secun'>
    <?php }
    ?>
    <div class="home-blog-secun-sub">
      <div><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" /></div>
      <div>
        <div class="fecha-blog"><?php echo get_the_date(); ?></div>
        <h4><?php echo get_the_title(); ?></h4>
        <p><?php the_excerpt(); ?></p>
        <div class="btn"><a class="btn-interna" href="<?php echo get_permalink(); ?>"><span class="texto-btn"><?php echo $texbtn; ?></span><span class="estilo-mas">+</span></a></div>
      </div>
    </div>
  <?php }
?>
<?php $cont++; endwhile;
  // echo $cont;
  if ($divsecu ==true) { ?>
    </div>
  <?php }
?>
</div>
