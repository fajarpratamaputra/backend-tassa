<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">List</span>
                <h3 class="page-title">Picture</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-md-6">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                  </div>
                  
                  <div class="card-body p-0 pb-3 text-center">
                    <table id="table" class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">Picture</th>
                          <th scope="col" class="border-0">#</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $no = 1;
                          foreach($footer as $f){
                      ?>
                      <tr>
                          <td><?=$no++?></td>
                          <td><img width="120px" height="80px" src="<?=base_url('assets/backend/banner/'.$f->picture_slider)?>" alt=""></td>
                          <td>
                              <a href="<?php echo base_url('banner/delete_picture/'.$f->id_slider) ?>" class="btn btn-sm btn-outline-primary mr-1">Delete</a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                      <!-- <div class="paging">
                        <?php 
                        //  echo $this->pagination->create_links();
                        ?>
                      </div> -->
                     </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <form action="<?=base_url('footpicture/insert_picture');?>" enctype="multipart/form-data" method="post">
                  <!-- Input & Button Groups -->
                  <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                      <h6 class="m-0"></h6>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-3">
                          <strong class="text-muted d-block mb-2">Add Footer Picture</strong>
                          <h6 style="font-size:12px;">dimensi : 1280 x 420</h6>
                          <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" >
                          </div>
                      </li>
                    </ul>
                    <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Insert</button>
                  </div>
                  <!-- / Input & Button Groups -->
                  </form>
                
              
              </div>
              <!-- End Default Light Table -->
            
          </div>
