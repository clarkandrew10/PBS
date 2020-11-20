<?php
/* Template Name: Splash

*/
get_header();
while ( have_posts() ) :
  the_post();
endwhile;
$logo = get_field('featured_image');

/* Install Section Start*/
$install_img = get_field('install_img'); /* Image */
$install_link = get_field('install_btn'); /* Button Link */
$install_btn_desc = get_field('install_btn_desc'); /* Description Above the Button */
$install_btn_txt = get_field('install_btn_txt'); /* Text on Button*/
/* Install Section End*/

/* Engin Section Start*/
$engin_img = get_field('engin_img'); /* Image */
$engin_link = get_field('engin_btn'); /* Button Link */
$engin_btn_desc = get_field('engin_btn_desc'); /* Description Above the Button */
$engin_btn_txt = get_field('engin_btn_txt'); /* Text on Button*/
/* Engin Section End*/
?>

<div class="row">
  <div class="col-md-12 grey-background">
    <img src="<?php echo $logo['url']; ?>" class="aligncenter img-fluid pbs-logo" alt="<?php echo $logo['alt']; ?>">
  </div>
</div>
     <div class="row"><!-- main wrap -->
          <!-- horizontal fixed-width || blue background || centering  -->
      <div class="row mx-0 blue-gradient justify-content-md-center" style="width:100%;"> <!-- blue gradient + text -->
        <div class="col-md-10 text-white text-center banner-text text" style="font-size: 2rem;">
          <?php the_content(); ?>
        </div>
      </div>
      <!-- Install Image Start-->
        <div class="col-md-6 px-0 mx-0 home-bgs" style="background-image: url(<?php echo $install_img['url'] ?>);">
          <div  class="c-owner c-owner-btn">
            <div class="text-center text ">
              <?php echo get_field('install_btn_desc'); ?>
            </div>
            <div onclick="location.href='https://aclarke.cloudaccess.host/home/Installation'"type= "button" class="abt-btn btn-lb">
              <?php echo get_field('install_btn_txt');?>
            </div>
          </div>
        </div>
         <!-- Install Image end-->

         <!-- Engin Image Start-->
        <div class="col-md-6 px-0 mx-0 home-bgs" style="background-image: url(<?php echo $engin_img['url'] ?>);">
          <div onclick="location.href='https://aclarke.cloudaccess.host/home/engineering'" class="c-owner c-owner-btn">
            <div class="text-center text">
              <?php echo get_field('engin_btn_desc'); ?>
            </div>
            <div type = "button" class="abt-btn btn-b">
                  <?php echo get_field('engin_btn_txt');?>
                </div>
              </div>

        </div>
        <!--Engin Image End-->
    </div> <!-- main wrap -->

<?php
get_footer();
?>
