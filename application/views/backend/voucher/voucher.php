<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">List</span>
                <h3 class="page-title">Voucher</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <a class="mb-2 btn btn-sm btn-outline-primary mr-1" href="<?=base_url('voucher/add')?>">Add Voucher</a>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table id="table" class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">Kode Voucher</th>
                          <th scope="col" class="border-0">Potongan(%)</th>
                          <th scope="col" class="border-0">Tanggal Aktif</th>
                          <th scope="col" class="border-0">Tanggal Non Aktif</th>
                          <th scope="col" class="border-0">#</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $no = 1;
                          foreach($voucher as $vou){
                      ?>
                      <tr>
                          <td><?=$no++?></td>
                          <td><?=$vou->code_voucher?></td>
                          <td><?=$vou->value?></td>
                          <td><?=$vou->begin_date?></td>
                          <td><?=$vou->expired_date?></td>
                          <td>
                              <a href="<?php echo base_url('voucher/edit/'.$vou->code_voucher) ?>" class="btn btn-sm btn-outline-primary mr-1">Edit</a>
                              <a href="<?php echo base_url('voucher/delete/'.$vou->code_voucher) ?>" class="btn btn-sm btn-outline-primary mr-1">Delete</a>
                          </td>
                      </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>
