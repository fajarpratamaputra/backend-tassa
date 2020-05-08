
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Add</span>
                <h3 class="page-title">Product</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <form action="<?=base_url('products/insert');?>" enctype="multipart/form-data" method="post">
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
                                <strong class="text-muted d-block mb-2">Product Name</strong>
                                <input type="text" class="form-control" name="name" placeholder="Product Name" required>
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Product Price</strong>
                                <input type="number" class="form-control" name="price" placeholder="0" required> 
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Product Weight (Kg)</strong>
                                <input type="number" class="form-control" name="weight" placeholder="0" required> 
                            </div>
                            <div class="form-row">
                                <strong class="text-muted d-block mb-2">Product Category</strong>
                                <select name="category" id="inputState" class="form-control" required>
                                    <option selected>Pilih Category</option>
                                    <?php foreach ($category as $cat): ?>
                                        <option value="<?php echo $cat->CategoryID ?>"><?php echo $cat->CategoryName ?></option>
                                      <?php endforeach; ?>

                                </select>
                            </div>
                            
                          <!-- </form> -->
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <strong class="text-muted d-block mb-2">Product Description</strong>
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
                            </div>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <!-- Input & Button Groups -->
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Image & Stock</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-3">
                        <strong class="text-muted d-block mb-2">Image</strong>
                        <div class="input-group mb-3">
                          <input name="file" type="file" class="form-control" required> 
                        </div>
                        <strong class="text-muted d-block mb-2">Stock</strong>
                        <div class="input-group mb-3">
                          <input name="stok" type="number" class="form-control" required >
                        </div>

                    </li>
                  </ul>
                </div>
                <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Create</button>
                <!-- / Input & Button Groups -->
              </div>
            </div>
            </form>
            
          </div>