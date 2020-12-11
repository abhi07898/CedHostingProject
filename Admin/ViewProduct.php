<!-- including header file -->
<?php require 'admin_header.php';?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
  <?php require 'search_admin.php';?>
    <!-- Header -->
    <!-- <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
         Card stats        
         </div>
      </div>
    </div> --> 
          
        <table class="table  ml-4 mr-4 text-center " id="product_cat_detail">
          <thead>
            <th>ID</th>
            <th>PRODUCT NAME</th>
            <th>Availibility</th>
            <th>URL</th> 
            <th>ACTION</th>
          </thead>
          <tbody id='table_result'>
          
          </tbody>
        </table>
   
    </div>
  </div>
  <!-- MOdal -->
<div class="modal fade" id="edit_cat_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Helloo Admin Update The Categories of Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
        <table class="table" id="result-table">
            
        </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_categories" data-dismiss="modal" >Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- closing Modal -->
      <!-- Footer -->
  <?php require 'footer_admin.php';?>

