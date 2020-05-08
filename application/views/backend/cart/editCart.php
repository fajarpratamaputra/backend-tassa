
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Edit</span>
                <h3 class="page-title">Cart</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <form action="<?=base_url('cart/update_cart');?>" enctype="multipart/form-data" method="post">
            <div class="row">
              <div class="col-lg-8 mb-4">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Form Inputs</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col-sm-12 col-md-6">
                        <a href="<?=base_url("cart/")?>" class="mb-2 btn btn-sm btn-primary mr-1">Back</a>
                          <!-- <form> -->
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Username</strong>
                                <input type="text" class="form-control" name="username" value="<?=$cart->UserName?>" readonly>
                                <input type="hidden" name="id" value="<?=$cart->id_cart?>">
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Order Code</strong>
                                <input type="text" class="form-control" name="order" value="<?=$cart->orderid?>" readonly> 
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Product</strong>
                                <input class="form-control" list="browsers" name="product" value="<?=$cart->ProductName?>" readonly>
                                <datalist id="browsers">
                                  <?php foreach ($product as $prod): ?>
                                    <option <?php if ($cart->productid == $prod->ProductID) { echo "selected"; } ?> value="<?php echo $prod->ProductName ?>">
                                  <?php endforeach; ?>
                                </datalist>
                            </div>
                          <!-- </form> -->
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Qty</strong>
                                <input type="number" class="form-control" name="qty" value="<?=$cart->qty?>" > 
                            </div>
                            <div class="form-row">
                                <strong class="text-muted d-block mb-2">Color</strong>
                                <select name="color" id="inpu(tState" class="form-control">
                                    <option selected>Pilih Color</option>
                                    <option <?php if($cart->color == 'White') { echo "selected"; } ?> value="White">White</option>
                                    <option <?php if($cart->color == 'Gray') { echo "selected"; } ?> value="Gray">Gray</option>
                                </select>
                            </div>
                            
                        </div>
                      </div>
                      
                    </li>
                    <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Update</button>
                  </ul>
                </div>
              </div>
              
            </div>
            </form>
            
          </div>