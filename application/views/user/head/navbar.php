<div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row xyz">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="<?php echo base_url('DisplayContant/index'); ?>"><img src="<?php echo base_url('assets/images/logo/4.png') ?>" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                    <li class="drop"><a href="<?php echo base_url('DisplayContant/'); ?>">Home</a></li>

                                    <?php //echo print_r($data);exit; ?>
                                        <?php 

                                        if(!empty($data)){
                                            foreach($data as $d){
                                                ?>
                                                <li class="drop"><a href="<?php echo base_url('DisplayContant/product_search/').$d->id; ?>"><?php echo $d->category_name; ?></a>
                                                <?php
                                            }
                                        }
                                        
                                        ?>
                                        <!-- <li class="drop"><a href="javascript:void(0)">women</a> -->
                                            <!-- <ul class="dropdown mega_dropdown">
                                               
                                                <li><a class="mega__title" href="product-grid.html">Shop Pages</a>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.html">Product Grid</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                
                                               
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Category</a></li>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                
                                               
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Downloadable Product</a></li>
                                                        <li><a href="#">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                
                                            </ul> -->
                                        <!-- </li> -->
                                        <!-- <li class="drop"><a href="javascript:void(0)">men</a> -->
                                            <!-- <ul class="dropdown mega_dropdown">
                                               
                                                <li><a class="mega__title" href="product-grid.html">Shop Pages</a>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.html">Product Grid</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                
                                               
                                                <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Category</a></li>
                                                        <li><a href="#">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                
                                               
                                                <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                                    <ul class="mega__item">
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Downloadable Product</a></li>
                                                        <li><a href="#">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                
                                            </ul> -->
                                        <!-- </li> -->
                                        <!-- <li class="drop"><a href="javascript:void(0)">Product</a> -->
                                           <!--  <ul class="dropdown">
                                                <li><a href="product-grid.html">Product Grid</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                            </ul> -->
                                        <!-- </li> -->
                                        <!-- <li class="drop"><a href="javascript:void(0)">blog</a> -->
                                            <!-- <ul class="dropdown">
                                                <li><a href="blog.html">Blog Grid</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> -->
                                        <!-- </li> -->
                                        <!-- <li class="drop"><a href="javascript:void(0)">Pages</a> -->
                                            <!-- <ul class="dropdown">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="cart.html">Cart page</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="product-grid.html">product grid</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul> -->
                                        <!-- </li> -->
                                        <!-- <li><a href="javascript:void(0)">contact</a></li> -->
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                        <?php 

                                        if(!empty($data)){
                                            foreach($data as $d){
                                                ?>
                                                <!-- <li class="drop"><a href="javascript:void(0)"><?php echo $d->category_name; ?></a> -->
                                                <li><a href="#"><?php echo $d->category_name; ?></a></li>
                                            <!-- <li><a href="#">blog</a></li>
                                            <li><a href="#">pages</a> -->
                                                <?php
                                            }
                                        }
                                        
                                        ?>
                                            <!-- <li><a href="#">Home</a></li>
                                            <li><a href="#">blog</a></li>
                                            <li><a href="#">pages</a> -->
                                                <!-- <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="cart.html">Cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="product-grid.html">product grid</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <!-- <a href="<?php //echo base_url('DisplayContant/loginPage') ?>"><i class="icon-user icons"></i></a> -->
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua">2</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>