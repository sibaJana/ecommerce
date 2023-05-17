
<div class="content pb-0 xyz">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header" align="center"> <strong>Product</strong><small> Form</small></div>
                        <div class="card-body card-block">
                           <form enctype="multipart/form-data">
                           <div class="form-group">
                            <label for="company" class=" form-control-label">Product Name</label>
                            <input type="text" id="product_name" placeholder="Enter Product Name" class="form-control"></div>
                            <div class="form-group">
                            <label for="company" class=" form-control-label">Product Price</label>
                            <input type="text" id="product_prise" placeholder="Enter product price" class="form-control"></div>
                            <div class="form-group">
                            <label for="product-category" class="form-control-label">Product Category</label>
                            <select  id="product_category" name="product_category" class="form-control">
                              <option selected value=" ">Select product Category</option>
                            <?php
                          
                            
                              foreach($display_category as $category){
                                 ?>
                                 <option value="<?php echo $category->id;  ?>"><?php echo $category->category_name;  ?></option>
                                 <?php
                              }

                            ?>

                                </select>
                                </div>

                           
                            <div class="form-group">
                            <label for="company" class=" form-control-label">product quentity</label>
                            <select  id="product_quentity" name="product_quentity" class="form-control">
                              <option selected value=" ">Select product inventory</option>
                            <?php
                          
                            
                              foreach($product_inventory as $inventory){
                                 ?>
                                 <option value="<?php echo $inventory->id;  ?>"><?php echo $inventory->quantity;  ?></option>
                                 <?php
                              }

                            ?>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="company" class=" form-control-label">product discount</label>
                            <select  id="product_discount" name="product_discount" class="form-control">
                              <option selected value=" ">Select product discount</option>
                            <?php
                           
                            
                              foreach($product_discount as $discount){
                                 // print_r($discount->id);
                                 // die();
                                 ?>
                                 
                                 <option value="<?php echo $discount->id;  ?>"><?php echo $discount->name;  ?></option>
                                 <?php
                              }

                            ?>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="company" class=" form-control-label">Product image size 290*385</label>
                            <input type="file" id="product_image" placeholder="select Product image" class="form-control"></div>
                           <div class="form-group">
                            <label for="discount_desc" class="form-control-label">Product Description</label>
                            <textarea id="product_desc" rows="5" placeholder="Enter Product description" class="form-control"></textarea></div>
                            <button id="product_button" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Add Product</span>
                           </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
</div>