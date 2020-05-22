
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Edit</span>
                <h3 class="page-title">Voucher</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <form action="<?=base_url('voucher/update');?>" enctype="multipart/form-data" method="post">
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
                                <input type="text" class="form-control" name="code" minlength="6" maxlength="6" value="<?=$vou->code_voucher?>" required>
                                <input type="hidden" name="id_voucher" value="<?=$vou->id_voucher?>">
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Potongan</strong>
                                <input type="number" class="form-control" min="1" max="100" name="value" value="<?=$vou->value?>" required>
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Tanggal Aktif</strong>
                                <input type="date" class="form-control" name="start" value="<?php echo date('Y-m-d', strtotime($vou->begin_date)) ?>" required>
                            </div>
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Tanggal Non Aktif</strong>
                                <input type="date" class="form-control" name="end" value="<?php echo date('Y-m-d', strtotime($vou->expired_date)) ?>" required>
                            </div>
                            <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Update</button>

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