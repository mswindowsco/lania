<?php
global $tz_Page;
if(isset($tz_Page) && !empty($tz_Page)):
    foreach($tz_Page as $tzpage):
        if($tzpage['plazart_TZPagePosition']==2):

            ?>
        <section class="about_web">
            <div class="container-fluid <?php echo $tzpage['plazart_TZPageBackground']; ?>">
                <div class="full-width">
                    <div class="tzaboutweb_fluid  <?php echo $tzpage[THEME_PREFIX.'_TZPagePadding']; ?>">
                        <?php

                        $arr_page = array(
                            'post_type'     =>  'page',
                            'post_status'   =>  'publish',
                            'p'             =>  $tzpage['plazart_TZPage_item']
                        );

                        $contact_page = new WP_Query($arr_page);

                        if($contact_page->have_posts()): while($contact_page->have_posts()): $contact_page->the_post();

                            the_content();

                        endwhile; endif; wp_reset_postdata();

                        ?>
                        <div class="clearfix"></div>
                    </div><!--end class tzaboutweb_fluid-->
                </div>
            </div><!--end class container-fluid-->
        </section><!--end class about_web-->

        <?php
        endif;
    endforeach;
endif;
?>