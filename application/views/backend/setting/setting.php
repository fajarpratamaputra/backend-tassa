<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="" src="<?=base_url('assets/template/')?>images/logo_tassa.png" alt="User Photo" width="110">
                    </div>
                    <h4 class="mb-0">Web Setting</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Workload</strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            <span class="progress-value">100%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form action="<?=base_url('setting/update');?>" enctype="multipart/form-data" method="post">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="feUserName">Url Web</label>
                                <input type="text" name="url" class="form-control" id="feUserName" value="<?=$setting->url_web?>" > </div>
                                <input type="hidden" name="id" class="form-control" id="feUserName" value="<?=$setting->id?>" >
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Address</label>
                                <input type="text" name="address" class="form-control" id="feEmailAddress" value="<?=$setting->office_address?>" > </div>
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Telepon</label>
                                <input type="text" name="telepon" class="form-control" id="feEmailAddress" value="<?=$setting->telepon?>" > </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Update</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>