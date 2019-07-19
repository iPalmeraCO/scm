<?php
   /**   
      * The template for displaying all pages      
      * This is the template that displays all pages by default.
      * Please note that this is the WordPress construct of pages and that other   
      * 'pages' on your WordPress site will use a different template.   
      * Template Name: testimonialeshome
   
      * @package WordPress   
      * @subpackage Twenty_Thirteen   
      * @since Twenty Thirteen 1.0
    */

   $args = array('category_name'=>'testimoniales',
    'posts_per_page'=> -1 );
    $query = new WP_Query( $args );
?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="container">
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
      <?php 
      $cont = 1;

   while ( $query->have_posts() ) : $query->the_post();
      if ($cont==1){
         $class = "active";
      }else {
         $class="";
      } ?>
        <div class="carousel-item <?php echo $class; ?> ">
            <div class="Home-casos">
                <?php $currentlang = get_bloginfo('language');
                  if ($currentlang == 'es') { ?>
                    <h2>Casos de Éxito</h2>
                  <?php }else{ ?>
                    <h2>Success stories</h2>
                  <?php }
                ?>
               <h2><?php echo $query->category_name; ?></h2>
                  <p><?php echo get_the_post_thumbnail(get_the_ID()); ?></p>
               <div class="cuadro-azul">
                <p><?php echo get_post_meta(get_the_ID(), 'descripcion2', true); ?></p>
               </div>
            </div>
       </div>
       <?php    $cont++; endwhile; ?>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
   </div>
</div>
<script type="text/javascript">   
   
</script>