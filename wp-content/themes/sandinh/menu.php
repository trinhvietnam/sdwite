<header id="masthead" class="site-header" role="banner">
    <div class="container">
        <div class="site-branding">
            <div class="site-brand-inner has-logo-img no-desc">
                <div class="site-logo-div"><a href="<?php bloginfo('url')?>"
                                              class="custom-logo-link" rel="home" itemprop="url"><img width="152"
                                                                                                      height="36"
                                                                                                      src="<?php echo get_bloginfo('template_url') ?>/public/images/logo-Copy-150x36.png"
                                                                                                      class="custom-logo"
                                                                                                      alt="logo"
                                                                                                      itemprop="logo"

                                                                                                      sizes="(max-width: 152px) 100vw, 152px"/></a>
                </div>
            </div>
        </div>
        <!-- .site-branding -->

        <div class="header-right-wrapper">
            <a href="#0" id="nav-toggle">Menu<span></span></a>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <ul class="onepress-menu">
                    <!--<li id="menu-item-1239"-->
                        <!--class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1239">-->
                        <!--<a href="/#features">Đặc trưng</a></li>-->
                    <li id="menu-item-27"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-27">
                        <a href="<?php bloginfo('url')?>/#about">Giới thiệu</a></li>
                    <li id="menu-item-1203"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1203">
                        <a href="<?php bloginfo('url')?>/#projects">Sản phẩm</a></li>
                    <!--<li id="menu-item-28"-->
                        <!--class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-28">-->
                        <!--<a href="/#services">Dịch vụ</a></li>-->

                    <li id="menu-item-1203"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1203">
                        <a href="<?php bloginfo('url')?>/#team">Nhân tài</a></li>

                    <!--<li id="menu-item-1204"-->
                        <!--class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1204">-->
                        <!--<a href="/#testimonials">Testimonials</a></li>-->
                    <!--<li id="menu-item-1205"-->
                        <!--class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1205">-->
                        <!--<a href="/#pricing">Pricing</a></li>-->
                    <li id="menu-item-31"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-31 <%=menuCurrentItem=='blogs'?'onepress-current-item':''%>">
                        <a href="<?php bloginfo('url')?>/#blogs">Blogs</a></li>

                    <li id="menu-item-32"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-32">
                        <!--<a href="/#contact">Liên hệ</a></li>-->
                        <a href="<?php bloginfo('url')?>/#map">Liên hệ</a></li>
                    <li id="menu-item-31"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-31 <%=menuCurrentItem=='tuyen-dung'?'onepress-current-item':''%>">
                        <a href="<?php bloginfo('url')?>/tuyen-dung">Tuyển dụng</a></li>
                </ul>
            </nav>
            <!-- #site-navigation -->
        </div>
    </div>
</header><!-- #masthead -->