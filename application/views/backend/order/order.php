<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">List</span>
                <h3 class="page-title">Order</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-body p-0 pb-3 text-center">
                    <table id="table" class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">UserName</th>
                          <th scope="col" class="border-0">Order Code</th>
                          <th scope="col" class="border-0">Amount</th>
                          <th scope="col" class="border-0">Date</th>
                          <th scope="col" class="border-0">#</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $no = 1 + $this->uri->segment(3);
                          foreach($order as $ord){
                      ?>
                      <tr>
                          <td><?=$no++?></td>
                          <td><?=$ord->UserName?></td>
                          <td><?=$ord->OrderCode ?></td>
                          <td><?=date('d M Y H:i:s', strtotime($ord->OrderDate))?></td>
                          <td>
                              <a href="<?php echo base_url('order/edit/'.$ord->OrderID) ?>" class="btn btn-sm btn-outline-primary mr-1">Detail</a>
                              <a href="<?php echo base_url('order/delete/'.$ord->OrderID) ?>" class="btn btn-sm btn-outline-primary mr-1">Delete</a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      
                     <tfoot>
                      <div class="paging">
                        <?php 
                          echo $this->pagination->create_links();
                        ?>
                      </div>
                     </tfoot>
                    </table>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>
