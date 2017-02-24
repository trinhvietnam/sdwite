
<?php get_header('open')?>
<?php get_header('close')?>
<div>
    <?php get_template_part('menu') ?>
    <DIV class="site-content blog" id="content">
        <DIV class="container no-sidebar" id="content-inside">
            <DIV class="content-area" id="primary">
                <main class="site-main" id="main" role="main">
                    <HEADER>
                        <H1 class="page-title screen-reader-text">News</H1>
                    </HEADER>
                    <?php
                    $postType = 'tuyen-dung';
                    $PAGED_PARAM = 'paged';
                    $paged = get_query_var($PAGED_PARAM);
                    if($paged <=1 ){
                        $paged = 1;
                    }
                    $count=wp_count_posts( $postType, 'readable');
                    $args = array(
                        'post_type' => $postType,
                        'order' => 'DESC',
                        'offset' => ($paged-1)*get_option( 'posts_per_page' ),
                        'posts_per_page' => get_option( 'posts_per_page' )
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <ARTICLE
                                class="list-article clearfix post-996 post type-post status-publish format-standard hentry category-content category-more-tag category-uncategorized"
                                id="post-996">
                            <DIV class="list-article-thumb">
                                <A href="<?php echo get_permalink()?>">
                                    <IMG width="300" height="150" alt="" src="<?php the_post_thumbnail_url()?>"> </A>
                            </DIV>
                            <DIV class="list-article-content">
                                <HEADER class="entry-header">
                                    <H2 class="entry-title">
                                        <A href="<?php echo get_permalink()?>" rel="bookmark"><?php the_title()?></A>
                                    </H2>
                                </HEADER>
                                <!-- .entry-header -->
                                <DIV class="entry-excerpt">
                                    <P><?php the_excerpt()?></P>

                                </DIV>
                                <!-- .entry-content -->
                            </DIV>
                        </ARTICLE>
                    <?php endwhile ?>
                    <?php endif; ?>

                    <!-- #post-## -->



                    <!-- #post-## -->
                    <?php
                    $hasNextPage = false;
                    $hasPrePage = false;
                    $postPerPage = get_option('posts_per_page');
                    if($count->publish > ( $paged ) * $postPerPage){
                        $hasNextPage = true;
                    }
                    if($paged > 1){
                        $hasPrePage = true;
                    }
                    $a=false;
                    //                    echo $hasNextPage.'123'.$a.$postPerPage.$count->publish;
                    ?>
                    <?php if($hasNextPage || $hasPrePage){ ?>
                        <NAV class="navigation posts-navigation" role="navigation">
                            <H2 class="screen-reader-text">Posts navigation</H2>
                            <DIV class="nav-links">
                                <?php if($hasPrePage){?>
                                    <DIV class="nav-previous">
                                        <A href="<?php echo get_bloginfo('url').'/'.$postType.'?'.$PAGED_PARAM.'='.($paged-1)?>">Bài mới</A>
                                    </DIV>
                                <?php } ?>
                                <?php if($hasNextPage){?>
                                    <DIV class="nav-next">
                                        <A href="<?php echo get_bloginfo('url').'/'.$postType.'?'.$PAGED_PARAM.'='.($paged+1); ?>">Bài cũ</A>
                                    </DIV>
                                <?php }?>
                            </DIV>
                        </NAV>
                    <?php }?>
                </main>
                <!-- #main -->
            </DIV>
            <!-- #primary -->
        </DIV>
        <!--#content-inside -->
    </DIV>
</div>
<?php get_footer('open')?>
<?php get_footer('close')?>