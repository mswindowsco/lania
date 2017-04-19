<?php

    $company    = ot_get_option(THEME_PREFIX . '_company');
if((isset($company) && $company!="")):
    ?>
<section class="tzcompany">
    <div class="container-fluid bk-white-full">
        <div class="full-width">
        <div class="tzcompany_full">
            <div class="tzcompanycontent">
                <h3><?php echo ot_get_option(THEME_PREFIX.'_TZCompanyTitle','Company'); ?></h3>
            </div><!--end class tzaboutcontent-->
            <div class="employee_company">
                <div id="company_side">
                    <a id="showbiz_left_1" class="sb-navigation-left"><i class="sb-icon-left-open"></i></a>
                    <a id="showbiz_right_1" class="sb-navigation-right"><i class="sb-icon-right-open"></i></a>
                    <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" >
                        <div class="overflowholder">
                            <ul>
                                <?php foreach($company as $cpy): ?>
                                <li class="sb-media-skin">
                                    <img src="<?php echo $cpy[THEME_PREFIX . '_company_item']; ?>" alt="<?php echo $cpy['title']; ?>" title="<?php echo $cpy['title']; ?>">
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div><!--end class employee-->
        </div><!--end class aboutcontent_full-->
        </div>
    </div><!--end class container-fluid-->
</section><!--end class tzabout-->

<?php

    endif;
?>