<?php
/* Template Name: Thank You

*/
get_header();
while ( have_posts() ) :
  the_post();
endwhile;
$logo = get_field('featured_image');
$background = get_field('background_img');
$btn_link = get_field('btn_link');
$btn_txt = get_field('btn_txt'); /*Button Text*/
?>

<div class="row">
  <div class="col-md-12 grey-background">
    <img src="<?php echo $logo['url']; ?>" class="aligncenter img-fluid pbs-logo" alt="<?php echo $logo['alt']; ?>">
  </div>
</div>
     <div class="row"><!-- main wrap -->
          <!-- horizontal fixed-width || blue background || centering  -->
      <div class="row mx-0 blue-gradient justify-content-md-center" style="width:100%;"> <!-- blue gradient + text -->
        <div class="col-md-10 text-white text-center banner-text text p-0" style= "font-size:1.25rem;">
          <h2>Thanks for reaching out!</h2>
          <p>Thanks for reaching out! One of our qualified experts will contact you shortly. To learn more about Precision Building Solutions,</p>
          <div onclick="location.href='<?php echo get_field('btn_link'); ?>'" type= "button" class="abt-btn btn-lb w-50 mx-auto ">
            <?php echo get_field('btn_txt');?>
          </div>
          <?php the_content(); ?>
        </div>
      </div>
        <div class="col-md-12 px-0 mx-0 ty-bgs" style="background-image: url(<?php echo $background['url'] ?>);">
          </div>
        </div>



<?php
get_footer();
?>
