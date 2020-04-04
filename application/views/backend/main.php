<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
  <?php $this->load->view('backend/head'); ?>
  </head>
  <body class="h-100">
    
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <?php $this->load->view('backend/sidebar'); ?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        
          <?php $this->load->view('backend/navbar'); ?>
          
          <?=$content?>

          <?php $this->load->view('backend/footer'); ?>

        </main>
      </div>
    </div>
    
    <?php $this->load->view('backend/js'); ?>
  </body>
</html>