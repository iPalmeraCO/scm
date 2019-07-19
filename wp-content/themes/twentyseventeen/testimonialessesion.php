<?php
   /**   
      * The template for displaying all pages      
      * This is the template that displays all pages by default.
      * Please note that this is the WordPress construct of pages and that other   
      * 'pages' on your WordPress site will use a different template.   
      * Template Name: testimonalesseccion
   
      * @package WordPress   
      * @subpackage Twenty_Thirteen   
      * @since Twenty Thirteen 1.0
    */
get_header(); 
$currentlang = get_bloginfo('language');
if ($currentlang == 'es') {
  echo do_shortcode('[rev_slider alias="testimoniales"]'); 
}else{
  echo do_shortcode('[rev_slider alias="success-stories"]'); 
}
   $args = array('category_name'=>'testimoniales',
    'posts_per_page'=> -1 );
    $query = new WP_Query( $args );
?>

<div class="mp-row-fluid motopress-row mp-row-fullwidth-content mpce-dsbl-margin-left mpce-dsbl-margin-right breadcrumbs">
<div class="motopress-clmn mp-span12  mpce-dsbl-margin-left mpce-dsbl-margin-right">
<div class="motopress-code-obj">
<div class="cont-bread">
  <?php
    if ($currentlang == 'es') { ?>
      <a href="/ScmMobility">Home</a> – Casos de éxito</div>
    <?php }else{ ?>
      <a href="/ScmMobility/en/home-eng/">Home</a> – Success stories</div>
    <?php }
  ?>
</div>
</div>
</div>

<div class="container">  
   

   <?php while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="testimoniales">
    <div><?php echo get_the_post_thumbnail(get_the_ID()); ?></div>
    <div class="cuadro-azul">
    <p><?php 
      // echo get_post_meta(get_the_ID(), 'descripcion2', true); 
      echo get_the_content();
      ?>
    </p>
    </div>
    </div>      
       <?php   endwhile; ?>
</div>
    

<?php get_footer();
