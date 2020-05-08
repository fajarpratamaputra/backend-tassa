<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4 mb-3 border-bottom">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Detail</span>
                <h3 class="page-title">About Us</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <form action="<?=base_url('information/insert');?>" enctype="multipart/form-data" method="post">
            <div class="row">
              <div class="col-lg-8 mb-4">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Form Inputs</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <!-- <form> -->
                            <div class="form-group">
                                <strong class="text-muted d-block mb-2">Description</strong>
                                <textarea name="desc" id="summernote" cols="30" rows="20"><?=$about->description?></textarea>
                                <input type="hidden" name="type" value="about">
                              </div>
                            
                          <!-- </form> -->
                          <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">Create</button>
                        </div>
                      
                      </div>
                    </li>
                    
                  </ul>
                </div>
                
              </div>
              
            </div>
            </form>
            
          </div>
  <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 250,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['codeview']]
        ]
      });
    </script>