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
          
        <table class="table  ml-4 mr-4 text-center " id="product_detail">
          <thead>
            <th>PRODUCT NAME</th>
            <th>Availibility</th>
            <th>URL</th> 
            <th>LAUNCH-DATE</th>
            <th>Web_Space</th>
            <th>Band_Width</th>
            <th>Free_Domain</th>
            <th>lts</th>
            <th>Mailbox</th>
            <th>MONTHLY PRICE</th>
            <th>ANNUAL PRICE</th>
            <th>SKU</th>
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
  <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

  <script>
  $(document).ready(function(){
    action = "View_product_list";
    $.ajax({
      url : '../ajaxaction.php',
      type : 'post',
      dataType : 'json',
      data : {action:action},
      success : function(data) {
        var html = '';

        for(var i=0; i<data.length; i++) {
          var disc = jQuery.parseJSON(data[i]['description'])
          html+= "<tr><td>"+data[i]['prod_name']+"</td><td>"+data[i]['prod_available']+"</td><td>"+data[i]['link']+"</td><td>"+data[i]['prod_launch_date']+"</td><td>"+disc.Web_Space+"</td><td>"+disc.Band_Width+"</td><td>"+disc.Free_Domain+"</td><td>"+disc.lts+"</td><td>"+disc.Mailbox+"</td><td>"+data[i]['mon_price']+"</td><td>"+data[i]['annual_price']+"</td><td>"+data[i]['sku']+"</td><td><button  class='btn btn-outline-primary edit' data-eid="+data[i]['prod_id']+"  data-toggle='modal' data-target='#edit_cat_product' >EDIT</button><button class='btn btn-outline-danger delete' data-did="+data[i]['prod_id']+" >DELETE</button></td></tr>";
        }
        $('#table_result').html(html);
        $('#product_detail').DataTable();
      }
    });
    $(document).on('click','.delete', function(){
      var id  = $(this).data("did");
      var element = this;
      var action = "delete_product_details";
      $.ajax({
        url : '../ajaxaction.php',
        type : 'post',
        data : {id:id, action:action}, 
        success : function(data) {
          if(data==1) {
            alert("Data Deleted Successsfully");
          } 
        }
      });
    });
    $(document).on('click','.edit', function(){
      var id  = $(this).data("eid");
      alert(id);
      // var element = this;
      // var action = "delete_product_details";
      // $.ajax({
      //   url : '../ajaxaction.php',
      //   type : 'post',
      //   data : {id:id, action:action}, 
      //   success : function(data) {
      //     if(data==1) {
      //       alert("Data Deleted Successsfully");
      //     } 
      //   }
      // });
    });
  });
  </script>

