<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Tassa.id</title>
    <meta name="description" content="Tassa.id adalah platform e-commerce busana muslimah">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="<?=base_url('assets/backend/styles/') ?>shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/backend/styles/') ?>extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
       <main class="main-content col-lg-12">
           <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Tassa.id</span>
                <h3 class="page-title">Login Dashboard</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <style>
            .accout-detail-login {
                margin-left:25%;
            }

            @media (max-width: 768px) {
                .accout-detail-login {
                    margin-left:0%;
                }
            }

            </style>
            <div class="row">
              <div class="accout-detail-login col-lg-6 col-md-6 col-sm-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Tassa.id</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form action="<?=base_url('login/aksi_login') ?>" method="post">
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feFirstName">Username</label>
                                <input type="text" name="username" class="form-control" id="feFirstName" placeholder="Username" > </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="fePassword">Password</label>
                                <input type="password" name="password" class="form-control" id="fePassword" placeholder="Password"> </div>
                            </div>
                            <button type="submit" class="col-md-12 btn btn-accent" >Login</button>
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
          
        </main>
      </div>
    </div>
    <?php $this->load->view('backend/js'); ?>
  </body>
</html>