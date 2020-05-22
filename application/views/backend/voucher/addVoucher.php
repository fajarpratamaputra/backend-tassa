
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Add</span>
                <h3 class="page-title">Code Voucher</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <form action="<?=base_url('voucher/insert');?>" enctype="multipart/form-data" method="post">
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
                                <strong class="text-muted d-block mb-2">Kode Voucher</strong>
                                <input type="text" class="form-control" name="code" minlength="6" maxlength="6" placeholder="Product Name" required>
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Potongan</strong>
                                <input type="number" class="form-control" min="1" max="100" name="value" required>
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Tanggal Aktif</strong>
                                <input type="date" class="form-control" name="start" required>
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Tanggal Non Aktif</strong>
                                <input type="date" class="form-control" name="end" required>
                            </div>
                            <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Create</button>

                          <!-- </form> -->
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
            </form>
            
          </div>