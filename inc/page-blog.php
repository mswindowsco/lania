<section class="blog">
    <div class="container-fluid bk-fullwidth">
        <div class="full-width">
            <div class="blogcontent">

            <h3 class="blogh3"><?php echo ot_get_option(THEME_PREFIX. '_TZBlogTitle','Our Blog'); ?></h3>
            <div class="blogtab">
                <ul class="nav nav-tabs" id="tzmyTab">
                    <li class="active tzlatest"><a href="#latest"><?php echo ot_get_option(THEME_PREFIX. '_TZBlogNewTitle','Latest News'); ?></a></li>
                    <li class="tzpopular"><a href="#popular"><?php echo ot_get_option(THEME_PREFIX. '_TZBlogMostTitle','Featured'); ?></a></li>
                </ul>
                <div class="tab-content">
                    <?php load_template( trailingslashit( SERVER_PATH ) . 'inc/page-blog-news.php' ); ?>
                    <?php load_template( trailingslashit( SERVER_PATH ) . 'inc/page-blog-most.php' ); ?>
                </div><!--end class tab-content-->
            </div><!--end blogtab-->
            </div><!--end class blogcontent-->
        </div>

    </div><!--end class container-fluid-->
</section><!--end class blog-->