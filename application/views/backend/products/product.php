<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">List</span>
                <h3 class="page-title">Products</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <a class="mb-2 btn btn-sm btn-outline-primary mr-1" href="<?=base_url('products/add')?>">Add Products</a>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table id="table" class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">Product Name</th>
                          <th scope="col" class="border-0">Product Price</th>
                          <th scope="col" class="border-0">Product Description</th>
                          <th scope="col" class="border-0">Product Category</th>
                          <th scope="col" class="border-0">Product Image</th>
                          <th scope="col" class="border-0">#</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $no = 1;
                          foreach($prod as $p){
                      ?>
                      <tr>
                          <td><?=$no++?></td>
                          <td><?=$p->ProductName?></td>
                          <td><?=$p->ProductPrice?></td>
                          <td><?php echo word_limiter($p->ProductCartDesc, 5) ?></td>
                          <td><?=$p->CategoryName?></td>
                          <td><img width="60px" height="80px" src="<?=base_url('assets/backend/products/'.$p->ProductImage)?>" alt=""></td>
                          <td>
                              <a href="<?php echo base_url('products/edit/'.$p->ProductID) ?>" class="btn btn-sm btn-outline-primary mr-1">Edit</a>
                              <a href="<?php echo base_url('products/delete/'.$p->ProductID) ?>" class="btn btn-sm btn-outline-primary mr-1">Delete</a>
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
