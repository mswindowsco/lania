<?php
global $tz_Quote;
if(isset($tz_Quote) && !empty($tz_Quote)):

    foreach($tz_Quote as $tzQuote):

        if($tzQuote[THEME_PREFIX . '_TZPortoflioStatus']==1):

            if($tzQuote[THEME_PREFIX . '_TZPortfolioPosition']==6):

                $id_quote   =  (int)$tzQuote[THEME_PREFIX. '_TZQuote_item'];

                if(isset($id_quote) && !empty($id_quote)){
                    $quote_arr  =   array(
                        'post_type'     =>  'post',
                        'post_status'   =>  'publish',
                        'p'             =>  $id_quote
                    );
                }else{
                    $quote_arr  =   array(
                        'post_type' =>  'post',
                        'posts_per_page'=> 1,
                        'meta_query'   =>   array(
                            array(
                                'key' => 'plazart_portfolio_type',
                                'value' => 'quote'
                            ),
                        )
                    );
                }

                $quote_query    =   new WP_Query($quote_arr);
                if($quote_query->have_posts()): while($quote_query->have_posts()): $quote_query->the_post();
                    $image_full = get_post_meta($post->ID, THEME_PREFIX . '_portfolio_fullsize_image', TRUE);
                    $quotrauthor  =   get_post_meta($post->ID,THEME_PREFIX . '_portfolio_Quote_Autor',true);
                    $url_img= "";
                    if(has_post_thumbnail($post->ID)){
                        $url_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    }elseif($image_full!=""){
                        $url_img = $image_full;
                    }else{
                        $url_img = THEME_PATH.'/images/not-image.png';
                    }
                    $tzcontent  =   get_the_content();
                    ?>
                <section class="tzquote">
                    <div class="container-fluid">
                        <div class="quotecontent">
                            <ul>
                                <li class="quoteitem">
                                    <div class="quotebk" style="background-image: url(<?php echo $url_img; ?>)"></div>
                                    <div class="infobk"></div>
                                    <div class="tzinfo">
                                        <p class="p-quote">
                                            <?php echo $tzcontent; ?>
                                            <span class="tzauthor">- Okehampton Glass</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div><!--end class quotecontent-->
                    </div><!--end class container-fluid-->
                </section><!--end class tzquote-->

                <?php
                endwhile;

                endif;

            endif;

        endif;

    endforeach;

endif;
?>