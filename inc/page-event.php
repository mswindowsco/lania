<?php
    $tzEventTitle = ot_get_option(THEME_PREFIX.'_TZTZEventTitle','Event');
    $tzEventDs    = ot_get_option(THEME_PREFIX.'_TZEventDescription','');
    $tzLink = ot_get_option(THEME_PREFIX.'_TZTZEventlink','#');
    $tzEventName = ot_get_option(THEME_PREFIX.'_TZTZEventButton','Event');


?>
<section class="tzevent">
    <div class="container-fluid bk-fullwidth">
        <div class="full-width">
            <div class="tzevent_full">
                <div class="row-fluid">
                    <div class="span6">
                        <h3 class="tz-h3event"><?php echo $tzEventTitle; ?></h3>
                        <?php if(isset($tzEventDs) && $tzEventDs!=""): ?>
                            <p class="tz-event-ds">
                                <?php echo $tzEventDs; ?>
                            </p>
                        <?php endif; ?>
                    </div><!--end class span7-->
                    <div class="span6">
                        <p id="countdown" class="ul_event">
                            <button type="button" class="btn btn-default btn-days">
                                <span class="days">00</span>
                                <strong class="timeRefDays">days</strong>
                            </button>
                            <button type="button" class="btn btn-default btn-hours">
                                <span class="hours">00</span>
                                <strong class="timeRefHours">hours</strong>
                            </button>
                            <button type="button" class="btn btn-default btn-minutes">
                                <span class="minutes">00</span>
                                <strong class="timeRefMinutes">minutes</strong>
                            </button>
                            <button type="button" class="btn btn-default btn-seconds">
                                <span class="seconds">00</span>
                                <strong class="timeRefSeconds">seconds</strong>
                            </button>
                            <button type="button" class="btn btn-default btn-lg btn-tzevent">
                                <a href="<?php echo $tzLink; ?>"><?php echo $tzEventName; ?></a>
                            </button>
                        </p>
                    </div><!--end class span5-->
                    <div class="clearfix"></div>
                </div><!--end class row-fluid-->
            </div><!--end class aboutcontent_full-->
        </div>
    </div><!--end class container-fluid-->
</section><!--end class tzabout-->