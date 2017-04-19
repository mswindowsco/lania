<footer class="tzfooter">
    <div class="container-fluid bk-footer">
        <div class="full-width">
            <div class="footer-fluid">
                <div class="row-fluid">
                    <div class="span3 footermenu">
                        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 1')):

                    endif;
                        ?>
                    </div><!--end class footermenu-->
                    <div class="span3 footerSocial">
                        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 2')):

                    endif;
                        ?>
                    </div><!--end class footerSocial-->
                    <div class="span3 footerLatest">
                        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 3')):

                    endif;
                        ?>
                    </div>
                    <div class="span3 footerTweets">
                        <?php
                        if(function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 4')):
                        endif;
                        ?>
                    </div><!--end class footerTweets-->
                </div><!--end class row-fluid-->
            </div><!--end class footer-fluid-->

        </div><!--end class full-width-->
    </div><!--end class container-fluid-->
    <div class="container-fluid bk-footer">
        <div class="full-width">
            <div class="tzcopyright">
                <?php echo ot_get_option(THEME_PREFIX . '_copyright'); ?>
                <a id="TzTop">Top</a>
                <div class="tzclear"></div>
            </div>
        </div>
    </div>
</footer><!--end class container-fluid-->
<?php wp_footer(); ?>
<script type='text/javascript' src='http://mswindows.co/wp-content/themes/lania/js/jquery.fancybox.pack.js?ver=3.8.1'></script>
<p>Max</p>
</body>

</html>