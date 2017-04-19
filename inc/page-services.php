<?php


    $services       =   ot_get_option(THEME_PREFIX . '_Services');
    $countServices  =   count($services);

    $resultSpan = "";
    if($countServices<=6 && $countServices!=5){
        $resultSpan          =   12/$countServices;
        $resultSpan          = "span".$resultSpan;
    }else{
        $result              =  $countServices;
    }


    if(isset($services) && $services!=""):
?>

    <section class="ourclient">
        <div class="container-fluid bk-white-full">
            <div class="full-width">               
                <div class="clientcontent">
                    <?php if(isset($result) && !empty($result)){
                    $i =0;
                        foreach($services as $ser):  ?>

                            <?php if($i % 4 == 0):?><div class="row-fluid row-margin"><?php endif;?>

                                    <div class="span3 tz-server-detail">
                                        <div class="services-img">
                                            <img  alt="<?php echo $ser['title']; ?>" src="<?php echo $ser[THEME_PREFIX . '_Services_item']; ?>">
                                        </div><!--end class services-img-->
					<a href="/<?php echo $ser['title']; ?>">
                                        <h3><?php echo $ser['title']; ?></h3>
                                        <p><?php echo $ser[THEME_PREFIX . '_Services_description_item']; ?></p> </a>
                                    </div><!--end class tz-server-detail-->
                            <?php

                            if($i > 2 && $i !=5 && $i !=9 && $i !=13 && $i !=17 && $i !=21){

                                if($i % 2 == 1):?></div><?php endif;
                            }

                            $i++;
                        endforeach;

                    }else{
                        ?>
                    <div class="row-fluid row-margin">
                        <?php foreach($services as $ser): ?>
                        <div class="<?php echo $resultSpan; ?> tz-server-detail">
                            <a href="products/<?php echo $ser['title']; ?>">
				<div class="services-img">
                                <img alt="<?php echo $ser['title']; ?>" src="<?php echo $ser[THEME_PREFIX . '_Services_item']; ?>">
                            </div><!--end class services-img-->
                            
			    <h3><?php echo $ser['title']; ?></h3>
                            <p><?php echo $ser[THEME_PREFIX . '_Services_description_item']; ?></p> </a>
                        </div><!--end class tz-server-detail-->
                        <?php endforeach; ?>
                    </div><!--end class row-fluid-->
                    <?php
                    } ?>

                </div><!--end clientcontent-->
            </div><!--end full width-->
        </div><!--end class container-fluid-->
    </section><!--end class ourclient-->
    <?php endif; ?>