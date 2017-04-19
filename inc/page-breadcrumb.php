<?php
if(function_exists('bcn_display')):
?>
<section class="tzbreadcrumb">
    <div class="container-fluid bk-footer">
        <div class="full-width">
            <div class="tzbread">
                <div class="row-fluid">
                    <div class="span6 tzbread-attr">
                    <?php  bcn_display(); ?>
                    </div><!--end class span6-->
                    <div class="span6 tzbreadsocial">
                        <?php  get_social_url(); ?>
                        <div class="tzclear"></div>
                    </div><!--end class span6-->
                </div>
            </div><!--end class tzbread-->
        </div><!--end class full-width-->
    </div><!--end class container-fluid-->
</section><!--end tzbreadcrumb-->
<?php endif; ?>