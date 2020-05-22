
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Detail</span>
                <h3 class="page-title">Order</h3>
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
                         <!-- <form> -->
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Kode Order</strong>
                                <input type="text" class="form-control" name="username" value="<?=$order->OrderCode?>" readonly>
                                <input type="hidden" name="id" value="<?=$order->OrderID?>">
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Biaya</strong>
                                <input type="text" class="form-control" name="order" value="<?=$order->OrderAmount?>" readonly> 
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Nama Penerima</strong>
                                <input class="form-control" list="browsers" name="product" value="<?=$order->OrderShipName?>"  readonly>
                                
                            </div>
                          <!-- </form> -->
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div class="form-group">
                                <strong class="text-muted d-block mb-2">Telepon Penerima</strong>
                                <input type="text" class="form-control" name="username" value="<?=$order->OrderPhone?>" readonly>
                                <input type="hidden" name="id" >
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Kurir</strong>
                                <input type="text" class="form-control" name="order" value="<?=$order->OrderCourier?>" readonly> 
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Product</strong>
                                <textarea name="" class="form-control" id="" cols="30" rows="10"><?php echo $order->OrderShipAddress.', '.$order->OrderCity.', '.$order->OrderProvince.', '.$order->OrderZip ?>
                                </textarea>
                                
                            </div>
                            
                        </div>
                      </div>
                      
                    </li>
                    <a href="<?=base_url('order/')?>" class="mb-2 btn btn-sm btn-primary mr-1">Back</a>
                  </ul>
                </div>
              </div>
              
            </div>
            </form>
            
          </div>