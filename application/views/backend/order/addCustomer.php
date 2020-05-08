
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Add</span>
                <h3 class="page-title">Customer</h3>
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
                                <strong class="text-muted d-block mb-2">Username</strong>
                                <input type="text" class="form-control" name="username" placeholder="Product Name">
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Full Name</strong>
                                <input type="number" class="form-control" name="fullname" placeholder="Product Price" > 
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Email</strong>
                                <input type="text" class="form-control" name="email" placeholder="Product Name">
                            </div>
                            <div class="form-row">
                                <strong class="text-muted d-block mb-2">Province</strong>
                                <select name="province" id="inputState" class="form-control">
                                    <option selected>Pilih Province</option>
                                    

                                </select>
                            </div>
                            <div class="form-row">
                                <strong class="text-muted d-block mb-2">City</strong>
                                <select name="category" id="inputState" class="form-control">
                                    <option selected>Pilih City</option>
                                    
                                </select>
                            </div>
                          <!-- </form> -->
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Address</strong>
                                <input type="text" class="form-control" name="address" placeholder="Product Name">
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Telephone</strong>
                                <input type="number" class="form-control" name="telephone" placeholder="Product Price" > 
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Zip Code</strong>
                                <input type="text" class="form-control" name="zip" placeholder="Product Name">
                            </div>
                            
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Image</strong>
                                <input name="file" type="file" class="form-control" > 
                            </div>
                        </div>
                      </div>
                    </li>
                    <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Create</button>
                  </ul>
                </div>
              </div>
              
            </div>
            </form>
            
          </div>