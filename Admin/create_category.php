  <!-- including header file -->
  <?php require 'admin_header.php';?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
  <?php require 'search_admin.php';?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
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
          <!-- Card stats -->         
        </div>
      </div>
    </div>
    <div class="container mt--5 pb-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-2">
              <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Add Products Details..</button>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Email" type="email" value="Hosting" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Product Name" type="text" id='prod_name' required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="URL" type="text" id='url'>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <select class="form-control text-center" id="prod_avail" >
                      <!-- <option>Select-Availibility</option> -->
                      <option value="0">NOT-AVAILABLE</option>
                      <option value="1">AVAILABLE</option>
                    </select>
                  </div>
                </div>                
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4" id="add_prod">Add Product</button>
                </div>
              </form>
              
            </div>
          </div>
      </div>
      
        <table class="table  ml-4 mr-4 text-center mt-5 " id="product_cat_detail">
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

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
     <script>
     $(document).ready(function(){
        $('#add_prod').click(function(e){
          e.preventDefault();
          prod_name = $('#prod_name').val();
          prod_url = $('#url').val();
          prod_avail =parseInt($('#prod_avail').val());
          var letter = /^([a-zA-Z]+\s?)*$/;
          var url = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
          if(prod_name == '') {
            alert('Product name is Required Feild');
            $('#prod_name').focus();
          // }else if(prod_avail != 0 || prod_avail !=1) {
          //   alert("please Select Availibility of product");
          //   $('#prod_avail').focus();
          } else if(!(prod_name.match(letter))){
            alert("Product Name is not in Correct Form");
            $('#prod_name').focus();
          }
          else {
            var action = "insert_product(hosting)";
            $.ajax({
              url:'../ajaxaction.php',
              type :'post',
              data : {name:prod_name,url:prod_url,avail:prod_avail, action:action},
              success : function(data) {
                alert(data);
                show_pro_table();
              }
            });
          }
        });
        //ajax for retrive the data from Product table 
        function show_pro_table()
        {
          var action = "Retrive_data_from_tbl_product"
          $.ajax({
                url:'../ajaxaction.php',
                type :'post',
                dataType : 'json',
                data : {action:action},
                success : function(data) {
                  var html = '';
                  for(var i=0; i<data.length; i++) {
                    html+= "<tr><td>"+data[i]['id']+"</td><td>"+data[i]['prod_name']+"</td><td>"+data[i]['prod_available']+"</td><td>"+data[i]['link']+"</td><td><button  class='btn btn-primary edit' data-eid="+data[i]['id']+"  data-toggle='modal' data-target='#edit_cat_product' >EDIT</button><button class='btn btn-primary delete' data-did="+data[i]['id']+" >DELETE</button></td></tr>";
                  }
                  $('#table_result').html(html);
                  $('#product_cat_detail').DataTable();
                }
              });
        } 
        
        show_pro_table();
        $(document).on('click','.edit', function(e){
          e.preventDefault();
          var action = 'edit_cat_product';
          var id = $(this).data('eid');
          $.ajax({
            url : '../ajaxaction.php',
            type : 'POST',
            dataType :'json',
            data: {action:action,id:id},
            success : function (data) {
              // $('#edit_name').val(data[0]['name']);
            //  alert(data[0]['id']);
            var html = "<tr>\
                        <td>Product Name</td> \
                        <td><input type='text' id='edit_name' value="+data[0]['prod_name']+"><input type='hidden' id='edit_id' value="+data[0]['id']+"></td>\
                      </tr>\
                      <tr>\
                        <td>Avalibility</td>\
                        <td> <select class='form-control text-center' id='edit_avail' >\
                                <option value='0'>Select-Availibility</option>\
                                <option value='0'>NOT-AVAILABLE</option>\
                                <option value='1'>AVAILABLE</option>\
                              </select>\
                        </td>\
                      </tr>\
                      <tr>\
                        <td>URL</td>\
                        <td><input type='text' id='edit_url' value="+data[0]['link']+"></td>\
                      </tr>";
                    $('#result-table').html(html);  
            }
          });
        });          
        $(document).on('click','.update_categories', function(e){
          e.preventDefault();
          var action = 'update_cat_product';
          var id = $('#edit_id').val();
          var name = $('#edit_name').val();
          var avail = $('#edit_avail').val();
          var url = $('#edit_url').val();
          $.ajax({
            url : '../ajaxaction.php',
            type : 'POST',
            dataType :'json',
            data: {action:action,id:id, name:name, avail:avail, url:url},
            success : function (data) { 
              if(data==1) {
                alert('Successfully updated');
                show_pro_table(); 
              }  else if(data==0){
                alert("Some little Concern in Update");
              }                                           
            }
          });
        });
        //for delte 
        $(document).on('click','.delete', function(e){
          e.preventDefault();
          var action = 'delete_cat_product';
          var element = $(this).val();
          var id  = $(this).data("did");
          $.ajax({
            url : '../ajaxaction.php',
            type : 'POST',
            dataType :'json',
            data: {action:action,id:id},
            success : function (data) {
              $('element').closest('tr').fadeOut();    
              if(data==1) {
                alert("Product Deleted Successsfully");
                show_pro_table();
              } else if(data==0) {
                alert("Some little Concern in DELEt");
              }        
              
            }
          });
        });           
     });
     </script>