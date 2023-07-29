<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="<?= site_url('') ?>">
                        <img src="<?= base_url(); ?>assets/img/54d078ea33a04971aa7c021c6b51c21d.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="<?php if ($this->uri->uri_string() == "") {
                                            echo "active";
                                        } ?>"><a href="<?= site_url('') ?>">Home</a></li>
                            <li class="<?php if ($this->uri->uri_string() == "categories") {
                                            echo "active";
                                        } ?>"><a href="<?= site_url('categories') ?>">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header__right">
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="./login.html"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->