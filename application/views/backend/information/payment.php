
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Detail</span>
                <h3 class="page-title">Payment</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <form action="<?=base_url('information/insert');?>" enctype="multipart/form-data" method="post">
            <div class="row">
              <div class="col-lg-8 mb-4">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Form Inputs</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <!-- <form> -->
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Description</strong>
                                <textarea class="form-control" name="desc" id="" cols="30" rows="20"><?=$payment->description?></textarea>
                                <input type="hidden" name="type" value="payment">
                              </div>
                            
                          <!-- </form> -->
                          <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Create</button>
                        </div>
                      
                      </div>
                    </li>
                    
                  </ul>
                </div>
                
              </div>
              
            </div>
            </form>
            
          </div>