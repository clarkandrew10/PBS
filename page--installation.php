<?php
/* Template Name: Installation

*/
get_header();
while ( have_posts() ) :
  the_post();
endwhile;
$logo = get_field('logo');
$header_img = get_field('header_image'); /* Header Image */

/*Stock Image Section (Next to the Form)*/
$stock_img = get_field('stock_img');
$stock_img_above = get_field('stock_img_text_above');
$stock_img_below = get_field('stock_img_text_below');
/*Services Section (Left Side)*/
$services_bullets = get_field('services_bullets'); /* Repeater Field*/
$services_icon = get_field('services_icon'); /*Font Awesome Class text*/
$services_desc = get_field('services_desc');
$services_img = get_field('services_img');
/*Process Section (Right Side)*/
$process_bullets = get_field('process_bullets'); /* Repeater Field*/
$process_icon = get_field('process_icon'); /*Font Awesome Class text*/
$process_desc = get_field('process_desc');
$process_img = get_field('process_img');

$consulting_btn = get_field('consulting_btn'); /*Text That Appears on the Button*/

$bg_body_engin = get_field('body_img'); /*I need to work on my naming conventions... I give up*/
$advert_text = get_field('advert_text'); /*The text next to the house image near the bottom*/

$bmd_img = get_field('bmd_img');
$installation_masters = get_field('installation_img');
$footer_img = get_field('footer_img');

?>

<div class="row">

  <div class="col-md-12 splash-header p-0"  style="background-image: url(<?php echo $header_img['url'] ?>); position: relative;">


    <div class="row mx-0 blue-gradient justify-content-md-center" style="width:100%; position: absolute; padding: 25px; bottom: 0;"> <!-- blue gradient + text -->
      <div class="col-md-10 text-center banner-text p-0">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="d-flex flex-row-reverse text-center">
        <div class="assist-btn px-5 py-2">
          Do you need engineering assistance?<br> <strong>Connect with our engineering team</strong>
          <i class="fas fa-caret-right"></i>
        </div>

      </div>
      <div class="repeater-text">
        <img src="<?php echo $logo['url']; ?>" class="ml-5 pbs-logo" alt="<?php echo $logo['alt']; ?>">
      </div>
      </div>

    <div class="col-md-7 install-gradient text-center p-5" >
      <p class="repeater-text"><?php echo get_field('stock_img_text_above');?><p>
      <img src="<?php echo $stock_img['url'] ?>" class="stock-img " alt="#">
      <h1 class="p-5"><?php echo get_field('stock_img_text_below');?></h1>
    </div>
    <div class="col-sm-5 p-4 blue-background">
      <?php gravity_form( 2, true, true, true, '', true );?>
    </div>
    <!-- Middle White Divider -->
    <div class="col-md-12 p-2 justify-content-md-center">
      <div class="col text-center">
        <p class="pt-4 mb-0 divider-text-it">
          We proudly offer our professional engineering services throughout California and Nevada!
        </p>
        <hr>
        <p class="divider-text">
          Contractor license #1066540
        </p>
      </div>
    </div>
    <!-- End -->

     <div class="row justify-content-center ho-offers-container">
       <div class="col-lg-6 px-0 mx-0">
         <div class="ho-offer1-wrapper row mx-0">
         <div class="col-md-11 ho-offer1-copy">
           <div class="row mx-0 align-items-center">
             <div class="ho-offer1 col-lg-11 offset-lg-1 offset-md-2">
               <h2 style="color:#000">Precision Building Solutions offers a wide range of premium services, including:</h2>
             </div>
             <?php
                  // check if the repeater field has rows of data
                  if( have_rows('services_bullets') ): ?>
                <?php
                    // loop through the rows of data
                      while ( have_rows('services_bullets') ) : the_row();
                    // display a sub field value
                        ?>
                       <div class="col-lg-1 col-2 icon-wrap pr-0">
                       <i class="<?php echo get_sub_field('services_icon'); ?>"></i>
                       </div>
                       <div class="col-lg-11 col-10 py-2">
                         <?php echo get_sub_field('services_desc'); ?>
                       </div>
                        <?php
                      endwhile;
                        endif;
                        ?>
                    </div>
                  </div>
                </div>
                <div class="row mx-0">
           <div class="col-md-12 px-0"style="background-image:url('<?php echo $services_img['url']; ?>'); background-repeat:no-repeat;background-position:center;width:100%;background-size:cover;min-height:800px;;">
           </div>
         </div>
       </div>

       <div class="col-lg-6 px-0 mx-0 desk">
           <div class="row mx-0">
             <div class="col-md-12 px-0"style="background-image:url('<?php echo $process_img['url']; ?>'); background-repeat:no-repeat;background-position:center;width:100%;background-size:cover; min-height:800px;">
           </div>
         </div>
           <div class="ho-offer1-wrapper row mx-0">
           <div class="col-md-11 ho-offer1-copy">
             <div class="row mx-0 align-items-center">
               <div class="ho-offer1 col-lg-11 offset-lg-1 offset-md-2">
                 <h2 style="color: #000">Our process is simple:</h2>
               </div>
               <?php
                    // check if the repeater field has rows of data
                    if( have_rows('process_bullets') ): ?>
                  <?php
                      // loop through the rows of data
                        while ( have_rows('process_bullets') ) : the_row();
                      // display a sub field value
                          ?>
                         <div class="col-lg-1 col-2 icon-wrap pr-0">
                         <i class="<?php echo get_sub_field('process_icon'); ?>"></i>
                         </div>
                         <div class="col-lg-11 col-10 py-2">
                           <?php echo get_sub_field('process_desc'); ?>
                         </div>
                          <?php
                        endwhile;
                          endif;
                          ?>
           </div>
               </div>
           </div>
         </div>
</div>

   <!-- Middle White Divider -->
   <div class="col-md-12 p-2 white-gradient">
     <div class="col text-center">

       <p class="pt-4 mb-0 mx-3 divider-text-bo"> INCREASE PROFITS. DECREASE CALLBACKS </p>
       <div class="consulting-btn mx-auto w-25 p-2 my-3" onclick="location.href='<?php echo get_field('btn_link'); ?>'" type= "button" >
         <?php echo get_field('consulting_btn');?>
       </div>
     </div>
   </div>
   <!-- End White Divider-->

   <!-- Start row here -->
   <!-- Advert Text -->
   <div class="row" style="width: 100%; background-color: #D59E5D">
       <div class="col-4 text-center my-auto px-5" >
         <div class="my-auto">
           <h1><?php echo get_field('advert_text');?></h1>
           </div>
       </div>
  <!-- End Adevrt Text -->
       <div class="col-8 greybackground bg-body-engin" style="background-image: url(<?php echo $bg_body_engin['url'] ?>);">
       </div>
     </div>
</div>
<div class="row">
  <div class="col-lg-12 text-center p-3" style="color: #2B485D;">
    <h3>Trust in Precision Building Solutions:</h3>
  </div>
    <div class="col-lg-4 my-auto" style="padding: 15px;">
      <img src="<?php echo $installation_masters['url'] ?>" alt="#">
      <div class="p-4">
        Our Master Installers are all FGIA Certified through the Installation Masters program developed by AAMA, factory trained, bonded and insured. Contractor license #1066540
      </div>
    </div>
    <div class="col-lg-8 p-5">
      <div class="left-divider"></div>
      <div class="row">


      <div class="col-lg-12 trust-top">
        <p>  Precision Building Solutions, Inc. is a wholly-owned subsidiary of Building Material Distributors Holdings, Inc. (Precision Building Solutions Installation, Inc. is a wholly-owned subsidiary of Precision Building Solutions, Inc.</p>
      </div>
      <div class="col-lg-4">
        <img src="<?php echo $bmd_img['url'] ?>" alt="#" style="float:left">
      </div>
      <div class="col-lg-8 px-0">
        <p>BMD represents over 75 years of expertise in the building industry. We understand that building professionals need high performance and reliability, not only with their products and service, but with the partners they choose to work with. We constantly evaluate the products and services we offer to ensure that our customers can rely on us for all of their building projects, no matter the size and scope, that will stand the test of time.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row dealer-container justify-content-center" style="background-image: url(<?php echo $footer_img['url'] ?>);" >
    <div class="col-md-12 px-0 ho-dealer-overlay" style="padding-top: 230px">
    <div class="ho-dealer-overlay-inner desk-bot-hero" >
      <div class="overlay-textwrap">
        <p>WINDOW AND DOOR INSTALLATION… WE ARE HERE TO HELP</p>
        <div class="consult-btn-bottom" onclick="location.href='#request-consultation'">
          request a free consultation
        </div>
      </div>
    </div>
  </div>
</div>




<?php
get_footer();
?>
