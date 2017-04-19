<?php

    $client_background = ot_get_option(THEME_PREFIX. '_TZClientsBackground',"");

    $tz_client  =   ot_get_option(THEME_PREFIX . '_Clients');
    $countclient      =   count($tz_client);

    $ClientSpan = "";
    if($countclient<=6 && $countclient!=5){
        $ClientSpan          =   12/$countclient;
        $ClientSpan          = "span".$ClientSpan;
    }else{
        $resultCl              =  $countclient;
    }

    if(isset($tz_client) && $tz_client!=""):
?>
<section class="ourclients">
    <div class="container-fluid">
        <div class="tzourclients">
            <div class="Clientbk" style="background-image: url(<?php echo $client_background; ?>)"></div>
            <div class="infobk"></div>
            <h3><?php echo ot_get_option(THEME_PREFIX. '_TZClientsTitle','Our Awesome Clients'); ?></h3>
            <div class="ourclientscontent">

                    <?php if(isset($resultCl) && !empty($resultCl)){
                    $i=0;
                    foreach($tz_client as $cli): ?>

                        <?php if($i % 4 == 0):?><div class="row-fluid itemrowclients"><?php endif;?>

                        <div class="span3 itemclient2">
                            <img alt="<?php echo $cli['title']; ?>" src="<?php echo $cli[THEME_PREFIX . '_Clients_item']; ?>"/>
                        </div><!--end class tz-server-detail-->
                        <?php

                        if($i > 2 && $i !=5 && $i !=9 && $i !=13 && $i !=17 && $i !=21){

                            if($i % 2 == 1):?></div><?php endif;
                        }
                        $i++;
                    endforeach;

                }else{      ?>
                <div class="row-fluid">
                    <?php foreach($tz_client as $cli): ?>
                    <div class="<?php echo $ClientSpan; ?> itemclient">
                        <img alt="<?php echo $cli['title']; ?>"  src="<?php echo $cli[THEME_PREFIX . '_Clients_item']; ?>"/>
                    </div><!--end class itemclient-->
                    <?php endforeach; ?>
                </div><!--end class row-fluid-->
                <?php
            } ?>

            </div><!--end class ourclientscontent-->
        </div><!--end class </div>-->
    </div><!--end class container-fluid-->
</section><!--end class ourclients-->

<?php

endif;
?>