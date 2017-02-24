<?php get_header('open')?>
<?php get_header('close')?>
    <div>
        <?php get_template_part('menu') ?>
        <div id="content" class="site-content">
            <div id="content-inside" class="container no-sidebar">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <article id="post-1303" class="post-1303 post type-post status-publish format-standard has-post-thumbnail hentry category-apps category-markup category-one-page category-responsive category-uncategorized">
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title()?></h1>
                                <div class="entry-meta">
                                    <span class="posted-on">Ngày đăng <time class="entry-date published" datetime="2017-02-10T07:03:45+00:00"><?php echo get_the_date('d-m-Y');?> </time></span><span class="byline"></span>
                                    <div class="fb-like" data-href="<?php echo get_permalink()?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->
                            <div class="entry-content">
                                <?php echo the_content($post->post_content)?>
                            </div><!-- .entry-content -->
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-comments" data-href="<?php echo get_permalink()?>" data-width="100%" data-numposts="5"></div>
                        </article><!-- #post-## -->
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!--#content-inside -->
        </div>
    </div>
<?php get_footer('open')?>
<?php get_footer('close')?>