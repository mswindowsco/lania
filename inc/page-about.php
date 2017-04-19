<?php
$About        = ot_get_option(THEME_PREFIX. '_TZAboutPage');
$employee     = ot_get_option(THEME_PREFIX . '_porOption_Employee');
if((isset($About) && $About!="") || (isset($employee) && $employee!="")):
?>
<section class="tzabout">
    <div class="container-fluid">
            <div class="aboutcontent_full">
                <div class="full-width">
                <?php if(isset($About) && $About!=""): ?>
                <div class="tzaboutcontent">
                    <?php
                        $About_argc = array(
                            'post_type'     =>  'page',
                            'post_status'   =>  'publish',
                            'p'             =>  $About
                        );

                        $About_post = new WP_Query($About_argc);

                        while($About_post->have_posts()): $About_post->the_post();

                    ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div><!--end class tzaboutcontent-->
                <?php endif; ?>
                <?php if(isset($employee) && $employee!=""): ?>
                    <div class="employee">
                        <div id="content-emp">
                            <div class="showbiz">
                                <div class="overflowholder">
                                    <ul>
                                        <?php foreach($employee as $emp): ?>
                                            <li class="sb-media-skin">
                                                <div class="employeeitem">
                                                    <div class="employeeimg">
                                                        <img src="<?php echo $emp[THEME_PREFIX . '_portfolio_slideshow_item']; ?>" alt="<?php echo $emp['title']; ?>" title="<?php echo $emp['title']; ?>">
                                                    </div><!--end class employeeimg-->
                                                    <h6><?php  echo $emp[THEME_PREFIX . '_portfolio_Name_item']; ?> </h6>
                                                    <span><?php  echo $emp[THEME_PREFIX . '_portfolio_position_item']; ?> </span>
                                                </div><!--end class employeeitem-->
                                            </li>
                                        <?php endforeach; ?>

                                    </ul>
                                    <div class="sbclear"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end class employee-->
                <?php endif; ?>
            </div><!--end class aboutcontent_full-->
        </div>
    </div><!--end class container-fluid-->
</section><!--end class tzabout-->
<?php endif; ?>
