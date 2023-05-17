
        <section class="htc__category__area ptb--100 xyz">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                            <p>But I must explain to you how all this mistaken idea</p>
                        </div> -->
                        <style>
                            #id{
                               
                            }
                        </style>
                    </div>
                </div>
                <div class="htc__product__container xyz">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
                            <!-- Start Single Category -->
                            <?php //print_r($discount);exit; ?>
                            <?php  foreach($product as $data){
                                ?>
                                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product-details.html">
                                        <img src="<?php echo base_url('assets/uploads/product_images/').$data->product_image;?>" style="background-position: 50% 54%;" alt="product images" width="290" height="350">
  </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $data->product_name; ?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$<?php echo $data->prise; ?></li>
                                            <li>$
                                                <?php 
                                                
                                                $oldprise=$data->prise;
                                                $discount_id=$data->discount_id;
                                                $productDiscount = null; // Initialize variable to hold the product discount

                                                        foreach ($discount as $discountItem) {
                                                            if ($discountItem->id == $data->discount_id) {
                                                                $productDiscount = $discountItem->discount_percent;
                                                                break;
                                                            }
                                                        }
                                                        
                                                         echo $oldprise - ($oldprise * ($productDiscount / 100));
                                                      

                                                
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                                <?php
                            } ?>
                     
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <!-- <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12 xyz">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product-details.html">
                                            <img src="images/product/2.jpg" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">nemo enim ipsam</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <!-- <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product-details.html">
                                            <img src="images/product/3.jpg" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">Chair collection</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <!-- <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product-details.html">
                                            <img src="images/product/4.jpg" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">dummy Product name</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <!-- <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product-details.html">
                                            <img src="images/product/5.jpg" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">donec ac tempus nrb</a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <!-- <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product-details.html">
                                            <img src="images/product/6.jpg" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">Product Title Here </a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                           <!--  <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product-details.html">
                                            <img src="images/product/7.jpg" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">Product Title Here </a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <!-- <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product-details.html">
                                            <img src="images/product/8.jpg" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html">Product Title Here </a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">$30.3</li>
                                            <li>$25.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
       