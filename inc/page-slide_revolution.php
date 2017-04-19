<?php
    $TZAlias = ot_get_option(THEME_PREFIX.'_TZAliasSlide',"");
    if(isset($TZAlias) && $TZAlias!=""):
?>


            <?php

            putRevSlider($TZAlias);

            ?>



<?php endif; ?>