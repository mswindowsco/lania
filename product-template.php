<?php
/**
 * Template Name: Product Template
 */

    get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content() ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

<section class="resume">
  <div class="container-fluid bk-resume">
    <div class="full-width">
      <div class="resume_fluid">
        <div class="resume_fluid_Content">
          <div class="row-fluid product">
            <div class="span8">
              <h1 class="page_title"><?php the_title(); ?></h1>
              <p><?php the_field(producttext) ?></p>
            </div>
            <div class="span4" id="single_image" style="display:inline;height:inherit !important;">
              <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <img style="max-width:75%;margin:auto;display:block;vertical-align: middle;border: 5px solid white; -webkit-box-shadow: 0px 5px 2px 0px rgba(50, 50, 50, 0.69); -moz-box-shadow:    0px 5px 2px 0px rgba(50, 50, 50, 0.69); box-shadow:         0px 5px 2px 0px rgba(50, 50, 50, 0.69);
    transform: rotate(5deg) ;
-webkit-transform: rotate(5deg) ;
-moz-transform: rotate(5deg) ;
-o-transform: rotate(5deg) ;
-ms-transform: rotate(5deg) ;"src="<?php echo $image[0]; ?>">
              <?php endif; ?>
            </div>
          </div>
				</div>
      </div><!--end class resume_fluid-->
    </div>
  </div><!--end class container-fluid-->
</section><!--end class resume-->




<section class="about_web">
            <div class="container-fluid bk-gray2"  style="background:white !important">
                <div class="full-width" style="border-bottom: 1px solid rgba(233,233,233,1); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(233, 233, 233);">
                    <div class="tzaboutweb_fluid  tzabout_padding3">
						<div class="row-fluid" style="text-align:center">
							<div class="green cta span4">
							  <?php the_field(productcta1) ?>
						 	</div>
							<div class="cta span4">
							  <?php the_field(productcta2) ?>
							</div>
							<div class="cta span4">
							  <?php the_field(productcta3) ?>
							</div>
						</div>
                        <div class="clearfix"></div>
                    </div><!--end class tzaboutweb_fluid-->
                </div>
            </div><!--end class container-fluid-->
 </section><!--end class about_web-->





<!--
<div class="container-fluid">
	<div class="full-width style"="border-bottom: 1px solid rgba(233,233,233,1); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(233, 233, 233);">
		<div class="row-fluid">
			<div class="span12" style="width:100% !important;">
				<?php $portfolio = get_field( "portfoliotitle" ); ?>
				<?php echo do_shortcode("[rev_slider $portfolio]"); ?>
			</div>
		</div>
	</div>
</div> -->











 <section class="about_web">
            <div class="container-fluid bk-gray2"  style="background:white !important; border-top: 1px solid #E9E9E9; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(233, 233, 233);">
                <div class="full-width">
                	<h3 style="text-align:center;padding-top:25px"> A little more info..</h3>
                    <div class="tzaboutweb_fluid  tzabout_padding3">
						<div class="row-fluid" style="text-align:center">
							<div class="cta span12" style="padding:20px; max-height:250px; overflow:auto;">
							  <p style="color:white"> <?php the_field(productlongtext) ?>
							  </p>
						 	</div>
						</div>
                        <div class="clearfix"></div>
                    </div><!--end class tzaboutweb_fluid-->
                </div>
            </div><!--end class container-fluid-->
 </section><!--end class about_web-->




<section class="about_web">
            <div class="container-fluid bk-gray2">
                <div class="full-width">
                    <div class="tzaboutweb_fluid  tzabout_padding3">
                        <h3 style="text-align:center;padding-top: 50px;"> What are you waiting for? Get in touch now.. </h3>
<div class="row-fluid" style="text-align:center">
<div class="cta span3">
  <i class="fa fa-phone" style="display:inline;font-size:48px;"></i><br />
  Call Us Now<br />
  01626 335 555
 </div>
<div class="cta span3">
  <i class="fa fa-phone-square"  style="display:inline;font-size:48px"></i><br />
  Request A Call Back<br />
  We&#8217;ll call you..<a href="http://mswindows.co/contact-us/#contact-form-ms"><span></span></a>
 </div>
<div class="cta span3">
  <i class="fa fa-file-text-o" style="display:inline;font-size:48px"></i><br />
  Email A Quote<br />
  Or An Order<a href="http://mswindows.co/contact-us/#contact-form-ms"><span></span></a>
 </div>
<div class="cta span3">
  <i class="fa fa-users" style="display:inline;font-size:48px"></i><br />
  Apply For<br />
  An Account<a href="http://mswindows.co/trade-accounts/"><span></span></a>
 </div>
</div>
                        <div class="clearfix"></div>
                    </div><!--end class tzaboutweb_fluid-->
                </div>
            </div><!--end class container-fluid-->
        </section><!--end class about_web-->





<?php get_footer(); ?>