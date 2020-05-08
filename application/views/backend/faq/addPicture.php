
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Add</span>
                <h3 class="page-title">Picture</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <form action="<?=base_url('products/insert_picture');?>" enctype="multipart/form-data" method="post">
            <div class="row">
              <div class="col-lg-4 mb-4">
                <!-- Input & Button Groups -->
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0"><?=$pic->ProductName?></h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-3">
                        <strong class="text-muted d-block mb-2">Picture</strong>
                        <div class="input-group mb-3">
                          <input name="file" type="file" class="form-control" > 
                          <input name="productid" type="hidden" value="<?=$pic->ProductID?>" > 
                        </div>
                    </li>
                  </ul>
                  <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Insert</button>
                </div>
                <!-- / Input & Button Groups -->
              </div>
            </div>
            </form>
            
          </div>