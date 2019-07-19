<?php
   /**   
      * The template for displaying all pages      
      * This is the template that displays all pages by default.
      * Please note that this is the WordPress construct of pages and that other   
      * 'pages' on your WordPress site will use a different template.   
      * Template Name: Blog
   
      * @package WordPress   
      * @subpackage Twenty_Thirteen   
      * @since Twenty Thirteen 1.0
    */

get_header(); ?>
<?php $currentlang = get_bloginfo('language');
 ?>
<div class="container">
   <?php   
      while ( have_posts() ) : the_post();
        the_content();
      endwhile; // End of the loop.
    ?>
</div>
<?php
   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   $args  = array(
       
       'orderby' => 'date',
        'cat' => 3,
       'post_type' => 'post',
       'posts_per_page' =>3,
       'orderby'=>'date', 
       'order' => 'DESC', 
       'paged' => $paged
   );
   $r     = new WP_Query($args);
   if ($r->have_posts()):
       if ($title)
           echo $before_title . $title . $after_title;
   ?>
<div class="container margenes_ab">
	<!-- <div class="row aling-hor2">
    <div class="padre-entradas"> -->
  <div class="">
    <div class="">
      <?php
        while ($r->have_posts()):
        $r->the_post();
      ?> 
                  
      <article class="content-entrada">
        <!-- <div class="blog-img"> -->
        <div class="">
          <a href="<?php echo get_permalink(); ?>">
            <div class="img-blog"><?php if (has_post_thumbnail() ) :  the_post_thumbnail('large'); endif; ?></div>
          </a>
        </div>
        <!-- <div class="cont_all_text"> -->
        <!-- <div style="margin-left: 20px;" > -->
        <div class="text-content-blog">
          <div class="fecha-blog"><?php the_time('M-d-Y') ?></div>
          <a href="<?php echo get_permalink(); ?>">
            <div class="content-title">
              <h4><?php the_title(); ?></h4>
            </div>
          </a>

          <div class="content-text1">
            <p><?php the_excerpt(); ?></p>
            <div class="btn"><a class="btn-interna" href="<?php echo get_permalink(); ?>"><span class="texto-btn">ver más</span><span class="estilo-mas">+</span></a></div>
          </div>
        </div>
      </article> 

      <?php
      endwhile;
      ?>
    </div>
    <!-- SIDEBAR -->
    <!-- <div class="content-sidbar"> -->
      <?php //if ( is_active_sidebar('sidebar_post') ) : ?>
          <?php //dynamic_sidebar('sidebar_post'); ?>
      <?php //endif; ?>
    <!-- </div> -->
    <!-- FIN SIDEBAR -->

  </div>
  
</div>

      <?php $total_pages = $r->max_num_pages;
        if ($total_pages > 1){
          $current_page = $paged;
          $big = 999999999; // need an unlikely integer
          $links= paginate_links(array(
            'base'    => str_replace( $big, '%#%', get_pagenum_link( $big )),
            'format'  => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => __('«'),
            'prev_next' => false,                     
            'next_text' => __('»'),
            'type'  => 'array'
          ));
          if( is_array( $links ) ) {
            echo '<div class="pagination-wrap "><ul class="pagination container blog-pag">';
            if ($paged != 1){        
              $n = $paged - 1;      
              if ($currentlang == 'es') {
                echo '<li><a class="prev page-numbers" href="'.get_site_url()."/index.php/blog-2-2/page/".$n.'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>';
              }else{
                echo '<li><a class="prev page-numbers" href="'.get_site_url()."/index.php/en/blog-eng/page/".$n.'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>';
              }             
            } else {
              // echo '<li><a class="prev page-numbers" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>';              
            }
            $cont = 1;
            $class= "bulletactive";
            foreach ( $links as $page ) {                
              if ($cont == $paged){
                $class = "bulletactive";
              } else {
                $class = "";
              }
              if ($currentlang == 'es') {
                 echo "<li class='".$class." element'><a href='".get_site_url()."/index.php/blog-2-2/page/".$cont."'>".$cont."</a></li>";
              }else{
                echo "<li class='".$class." element'><a href='".get_site_url()."/index.php/en/blog-eng/page/".$cont."'>".$cont."</a></li>"; 
              }
              $cont ++;
            }
            if ($paged != $total_pages){
              $n = $paged + 1;
              if ($currentlang == 'es') {
                echo '<li><a class="next page-numbers" href="'.get_site_url()."/index.php/blog-2-2/page/".$n.'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>';
              }else{
                echo '<li><a class="next page-numbers" href="'.get_site_url()."/index.php/en/blog-eng/page/".$n.'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>';
              }
              
            } else {
              // echo '<li><a class="next page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>';
            }
            echo '</ul></div>';
          }
        }
      ?>

<?php
   else:
   echo "No se encontaron articulos";
   ?>   
<!-- <a class="verMas" href="<?php
   echo site_url();
   ?>/work">VER MÁS <span>+</span></a> -->
<?php
   // wp_reset_postdata();
   endif;
   ?>


<?php get_footer();
