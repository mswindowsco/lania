<?php
/**
 * Template Name: Template Home
 */

    get_header();
?>
<?php
if($Slide_status==1):
    load_template( trailingslashit( SERVER_PATH ) . 'inc/page-slider.php' );
endif;
for($i=1;$i<=6;$i++){
    if($AboutPosition==$i && $About_status==1){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-about.php' );
    }
    if($ServicesPosition==$i && $services_status==1){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-services.php' );
    }
    if($CompanyPostion==$i && $Company_status==1){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-company.php' );
    }
    if($EventPostion==$i && $Event_status==1){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-event.php' );
    }
    if($PortfolioPostion==$i && $portfolio_status==1){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-portfolio.php' );
    }
    if($BlogPostion==$i && $blog_status==1){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-blog.php' );
    }


    if($i==1){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-select-1.php' );
    }
    if($i==2){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-select-2.php' );;
    }
    if($i==3){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-select-3.php' );
    }
    if($i==4){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-select-4.php' );
    }
    if($i==5){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-select-5.php' );
    }
    if($i==6){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-select-6.php' );
    }


    if($i==1){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-quote-1.php' );
    }
    if($i==2){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-quote-2.php' );
    }
    if($i==3){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-quote-3.php' );
    }
    if($i==4){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-quote-4.php' );
    }
    if($i==5){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-quote-5.php' );
    }
    if($i==6){
        load_template( trailingslashit( SERVER_PATH ) . 'inc/page-quote-6.php' );
    }

}

if($ClientsStatus==1):
    load_template( trailingslashit( SERVER_PATH ) . 'inc/page-clients.php' );
endif;

load_template( trailingslashit( SERVER_PATH ) . 'inc/page-breadcrumb.php' );
?>

<?php get_footer(); ?>