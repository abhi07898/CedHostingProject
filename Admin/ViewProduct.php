<?php
/**
 * Short description for code
 * php version 7.2.10
 *
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Pandey <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName
 *
 * This is a "Docblock Comment"
 */
require 'admin_header.php';?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php require 'search_admin.php';?>         
        <table class="table  ml-4 mr-4 text-center table-responsive" id="product_detail">
          <thead>
          <th>PRODUCT CATEGORY</th>
            <th>PRODUCT NAME</th>
            <th>Availibility</th>
            <th>HTML</th> 
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
    <input type="hidden" id='prod_id'>
  </div>
  <!-- MOdal -->
<div class="modal fade" id="edit_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Helloo Admin Welcome to Update Product Pannel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container mt--5">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent ">
              <div>
                <span>Create New Product</span>
                <h3>Enter Products Details</h3>
                <hr>
                  <!-- <button type="button" class="btn btn-primary my-4">Add Products Details..</button> -->
              </div>
              <div class="form-group">
                <p>Select Product category *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <select id='product_cat' class="form-control text-center">
                    </select> 
                    <input type="hidden" id="update_id">
                  </div>
                </div>
                <div class="form-group">
                <p>Add Product Name *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" type="text" placeholder = "Enetr Product Name" id="product_name">                  
                  </div>
                  <span id='product_name_err' class = "text-danger"></span>
                </div>
                <div class="form-group">
                <p>Page HTML</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    <textarea id='page_url'></textarea>
                    </div>
                    
                    <!-- <input class="form-control text-center" placeholder="URL" type="text" id='page_url'> -->
                  </div>
                  <span id='page_url_err' class = "text-danger"></span>
                </div>
                <span>Product Discription</span>
                <h3>Enter Product Description Below</h3>
                <hr> 
                <div class="form-group">
                <p>Enter Monthly Price * </p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Ex- 24$" type="number" id='monthly_price' required>
                  </div>
                  <span id='monthly_price_err' class = "text-danger"></span>
                </div>
                <div class="form-group">
                <p>Enter Annual Price * </p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Ex- 240$" type="number"  id='annual_price' required>
                  </div>
                  <span id='annual_price_err' class = "text-danger"></span>
                </div>
                <div class="form-group">
                <p>SKU *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="" type="text" id='sku' required>
                  </div>
                  <span id='sku_err' class = "text-danger"></span>
                </div>
                <h3>Features</h3>
                <hr>
                <div class="form-group">
                <p>Web Space(in GB) *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Enter 0.5 for 512MB" type="text" id='web_space' required>
                  </div>
                  <span id='web_space_err' class = "text-danger"></span>
                </div>
                <div class="form-group">
                <p>Band Width (in GB) *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Enter 0.5 for 512MB" type="text" id='band_width' required>
                  </div>
                  <span id='band_width_err' class = "text-danger"></span>
                </div>
                <div class="form-group">
                <p>Free Domain *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Enter 0 if no domain available in this service" type="text" id='free_domain' required>
                  </div>
                  <span id='free_domain_err' class = "text-danger"></span>
                </div>
                <div class="form-group">
                <p>Language/ technology Support *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Ex - PHP, MYsQl , MongoDB" type="text" id='lt_support' required>
                  </div>
                  <span id='lt_support_err' class = "text-danger"></span>
                </div>
                <div class="form-group">
                <p>Mailbox *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Enter Number of mailbox will be provided, enter 0 if none " type="text" id='mail_box' required>
                  </div>
                  <span id='mail_box_err' class = "text-danger"></span>
                </div>
              </form>             
            </div>
          </div>
      </div>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_product" data-dismiss="modal" >Update changes</button>
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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: 'textarea#page_url',
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false
  });
  $(document).ready(function(){
    function show_product_table() {
      action = "View_product_list";
      $.ajax({
        url : '../ajaxaction.php',
        type : 'post',
        dataType : 'json',
        data : {action:action},
        success : function(data) {
          var html = '';
          var parent_prod_name;
          for(var i=0; i<data.length; i++) {
                  if(data[i]['prod_available'] == 1) {
                    avail = "Available";
                  } else {  
                    avail = 'Not Available';
                  }     
            var disc = jQuery.parseJSON(data[i]['description']);
            html+= "<tr><td class='cat"+i+"'></td><td>"+data[i]['prod_name']+"</td><td>"+avail+"</td><td>"+data[i]['html']+"</td><td>"+data[i]['prod_launch_date']+"</td><td>"+disc.Web_Space+"</td><td>"+disc.Band_Width+"</td><td>"+disc.Free_Domain+"</td><td>"+disc.lts+"</td><td>"+disc.Mailbox+"</td><td>"+data[i]['mon_price']+"</td><td>"+data[i]['annual_price']+"</td><td>"+data[i]['sku']+"</td><td><button  class='btn btn-outline-primary edit' data-eid="+data[i]['prod_id']+"  data-toggle='modal' data-target='#edit_product' >EDIT</button><button class='btn btn-outline-danger delete' data-did="+data[i]['prod_id']+" >DELETE</button></td></tr>";
          }
          $('#table_result').html(html);
          $('#product_detail').DataTable();        
        }
      });
    }
    show_product_table();
    $.ajax({
      url : '../ajaxaction.php',
      type : 'post',
      dataType : 'json',
      data : {action:"fetch_parent_name"},
      success : function(data) {
        for(var i = 0; i<data.length ; i++) {
          $(".cat"+i).html(data[i]['prod_name']);
          
          // alert(data[i]['prod_name']);  
        }show_product_table();       
      }
    });
   
    $(document).on('click','.delete', function(){
      if(confirm('Are you sure you  want to deleet it!!!!!')) {
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
            show_product_table();
          } 
        }
      });
    }
    });

    $(document).on('click','.edit', function(){
      var id  = $(this).data("eid");
      var action = "fatched_hosting_category";
      //fetching the hosting data for menus in modal for edit the data 
      $.ajax({
        url: '../ajaxaction.php',
        type : 'post',
        dataType : 'json',
        data : {action:action},
        success : function(data) {
          html = '';
          for(var i=0; i<data.length; i++) {
            html+= "<option value='"+data[i]['id']+"'>"+data[i]['prod_name']+"</option>";    
          }
          $('#product_cat').html(html);
        }
      });
      // for showing the content in inout boxes
      var action = "edit_product_details";
      $.ajax({
        url : '../ajaxaction.php',
        type : 'post',
        dataType : 'json',
        data : {id:id, action:action}, 
        success : function(data) {
          var disc = jQuery.parseJSON(data[0]['description'])
          $('#update_id').val(data[0]['prod_id']);
          // $('#product_cat').val(data[0]['prod_id']);
          $('#product_name').val(data[0]['prod_name']);
          $('#page_url').val(data[0]['html']);
          $('#monthly_price').val(data[0]['mon_price']);
          $('#annual_price').val(data[0]['annual_price']);
          $('#sku').val(data[0]['sku']);
          $('#web_space').val(disc.Web_Space);
          $('#band_width').val(disc.Band_Width);
          $('#free_domain').val(disc.Free_Domain);
          $('#lt_support').val(disc.lts);
          $('#mail_box').val(disc.Mailbox);
          $('#update_id').val(data[0]['prod_id']);
        }
      });
  // the whole validation code are also used here because all the content are same for update also so ...
  $('#create_new').prop("disabled", false);
  var letter = /^([a-zA-Z0-9-]+\s?)*$/;
  var url = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
  var number = /^[0-9]+$/;
  var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
 
  var err_product_name = false;
  var err_page_url = false;
  var err_monthly_price = false;
  var err_annual_price = false;
  var err_sku = false;
  var err_web_space = false;
  var err_band_width = false;
  var err_band_width = false;
  var err_free_domain = false;
  var err_lt_support = false;
  var err_mail_box = false;
  
$('#product_name').focusout(function(){
  check_product_name();
});
$('#page_url').focusout(function(){
  chek_page_url();
});
$('#monthly_price').focusout(function(){
  check_monthly_price ();
});
$('#annual_price').focusout(function(){
  check_annaul_price();
});
$('#sku').focusout(function(){
  check_sku();
});
// web_space validation
$('#web_space').focusout(function(){
  check_web_space();
});
// band_width validation
$('#band_width').focusout(function(){
  check_band_width();
});
//free_domain validation 
$('#free_domain').focusout(function(){
  check_free_domain();
});
// lt validation
$('#lt_support').focusout(function(){
  check_lt_support();
});
//gmail validation
$('#mail_box').focusout(function(){
  check_mail_box();
});
function check_product_name() {

  product_name = $('#product_name').val().trim();
  if(product_name == '') {
    $('#product_name_err').html("Product Name is required!!!");
      $('#product_name').focus();
      err_product_name = true;
  }
  else if(!(product_name.match(letter))) {
      $('#product_name_err').html("Product Name is not in Proper way!!!");
      $('#product_name').focus();
      err_product_name = true;
  }else if(!isNaN(product_name)) {
    $('#product_name_err').html("Only Numbers are not allowed");
    err_product_name = true;
  } else {
    err_product_name = false;
    $('#product_name_err').html("");
  }
  
  validate_error();
}
// function for chrck  url
function chek_page_url() {
  
  page_url = $('#page_url').val().trim(); 
  // if(!(page_url.match(url))) {
  //     $('#page_url_err').html("URL is not in Proper way!!!");
  //     $('#page_url').focus();
  //     err_page_url = true;
  // } else {
  //   err_page_url = false;
  //   $('#page_url_err').html("");
  // }
  
  // validate_error();
}
// function for check monthly_price
function check_monthly_price () {
  monthly_price = $('#monthly_price').val().trim();
  if(monthly_price.length == '') {
    $('#monthly_price_err').html("Monthly Price  is Required!!!");
    $('#monthly_price').focus();
    err_monthly_price = true;
  }
  else if(!(monthly_price.match(/^[0-9]*\.?[0-9]*$/))) {
      $('#monthly_price_err').html("Monthly Price  is not in Proper way!!!");
      $('#monthly_price').focus();
      err_monthly_price = true;
  } else if(monthly_price.length > 15) {
    $('#monthly_price_err').html("More Then 15 digits values are not allowed");
    $('#monthly_price').focus();
    err_monthly_price = true;
  } 
  else {
    err_monthly_price = false;
    $('#monthly_price_err').html("");
  }
  
  validate_error();
  
}
// function for chgeckl annual price 
function check_annaul_price() {
  annual_price = $('#annual_price').val().trim();
  if(annual_price.length == '') {
    $('#annual_price_err').html("Annual Price is Required!!!");
    $('#annual_price').focus();
    err_annual_price = true;
  }
  else if(!(annual_price.match(/^[0-9]*\.?[0-9]*$/))) {
      $('#annual_price_err').html("Annual Price  is not in Proper way!!!");
      $('#annual_price').focus();
      err_annual_price = true;
  } else if(annual_price.length > 15) {
    $('#annual_price_err').html("More Then 15 are not allowed");
    err_annual_price = true;
    } 
  else {
      $('#annual_price_err').html("");
      err_annual_price = false;
    }
    
    validate_error();
}
// cehck function for sku validation 

function check_sku() {
  sku = $('#sku').val().trim();
  if(sku.length == '') {
    $('#sku_err').html("SKU is required!!!");
    $('#sku').focus();
    err_sku = true;
  }
  else if(!(sku.match(/^([a-zA-Z-0-9#]+\s?)*$/))) {
      $('#sku_err').html("SKU is not in proper way!!!");
      $('#sku').focus();
      err_sku = true;
  }
  else {
    $('#sku_err').html("");
    err_sku = false;
  }
  
  validate_error();
}
// check funciton for web space
function check_web_space() {
  web_space = $('#web_space').val().trim();
  if(web_space.length == '') {
    $('#web_space_err').html("Web Space feild is required");
    $('#web_space').focus();
    err_web_space = true;
  }
  else if(!(web_space.match(/^[0-9]*\.?[0-9]*$/))) {
      $('#web_space_err').html("Only numeric value is acceptable");
      $('#web_space').focus();
      err_web_space = true;
  } else if(web_space.length > 5)  {
      $('#web_space_err').html("Length should be less than 5!!!");
      $('#web_space').focus();
      err_web_space = true;
  }
  else {
    err_web_space = false;
    $('#web_space_err').html("");
    
  }
  
  validate_error();
}
// check function for band-width 
function check_band_width() {
  band_width = $('#band_width').val().trim();
  if(band_width.length == '') {
    $('#band_width_err').html("Band-Width feild are Required");
    $('#band_width').focus();
    err_band_width = true;
  }
  else if(!(band_width.match(/^[0-9]*\.?[0-9]*$/))) {
      $('#band_width_err').html("Only numeric value is acceptable");
      $('#band_width').focus();
      err_band_width = true;
  } else if(band_width.length > 5) {
      $('#band_width_err').html("Length should be less than 5!!!");
      $('#band_width').focus();
      err_band_width = true;
  } 
  else {
    err_band_width = false;
    $('#band_width_err').html("");
  }
  
  validate_error();
}

// checek function for free_domain
function check_free_domain() {
  var hasNumber = /\d/;
  free_domain = $('#free_domain').val().trim();
  if(free_domain.length =='') {
    $('#free_domain_err').html("Free Domain is Required Feild");
    $('#free_domain').focus();
    err_free_domain = true; 
  } 
  else if((!(free_domain.match(/^([a-zA-Z-0-9]+\s?)*$/)))) {
      $('#free_domain_err').html("Value should pure numeric or pure alphabetic");
      $('#free_domain').focus();
      err_free_domain = true;
  } else if(isNaN(free_domain) && hasNumber.test(free_domain)) {
    $('#free_domain_err').html("Value should pure numeric or pure alphabetic");
      $('#free_domain').focus();
      err_free_domain = true;
  } // true)
  else {
    err_free_domain = false;
    $('#free_domain_err').html("");
  }
  
  validate_error();
}

// check  function for lt-support  
function check_lt_support() {
  lt_support = $('#lt_support').val().trim();
  if(lt_support.length=='') {
    $('#lt_support_err').html("lt_support feild is required feild");
    $('#lt_support').focus();
    err_lt_support = true;
  } else if(!isNaN(lt_support)) {
    $('#lt_support_err').html("Only Numeric value are not allowed");
    $('#lt_support').focus();
    err_lt_support = true;
  }
  else if(!(lt_support.match(/^([a-zA-Z0-9,]+\s?)*$/))) {
      $('#lt_support_err').html("lt_support would only contin alpha/alphanumeric");
      $('#lt_support').focus();
      err_lt_support = true;
  } else { 
    err_lt_support = false;
    $('#lt_support_err').html("");
  }
  
  validate_error();
}
// check function for mail box 
function check_mail_box() {
  var hasNumber = /\d/;
  mail_box = $('#mail_box').val().trim();
  if(mail_box.length == '') {
    $('#mail_box_err').html("mail_box is required feild!!!");
    $('#mail_box').focus();
    err_mail_box = true;
  }
  else if(!(mail_box.match(/^([a-zA-Z-0-9]+\s?)*$/))) {
      $('#mail_box_err').html("No Special Chars(Value should pure numeric or pure alphabetic)");
      $('#mail_box').focus();
      err_mail_box = true;
  } else if(isNaN(mail_box) && hasNumber.test(mail_box)) {
    $('#mail_box_err').html("Value should pure numeric or pure alphabetic");
      $('#mail_box').focus();
      err_mail_box = true;
  }
   else {
    $('#mail_box_err').html("");
    err_mail_box = false;
  }
  
  validate_error();
}
function validate_error() {
  if(err_product_name == true || err_page_url == true || err_monthly_price == true || err_annual_price == true || err_sku == true || err_web_space == true || err_band_width == true || err_band_width == true || err_free_domain == true || err_lt_support == true || err_mail_box == true) {
    $('#create_new').prop("disabled", true);
  } else {
    $('#create_new').prop("disabled", false);
  }
}    //now codes for updates the products 
    $(document).on('click','.update_product', function(e){
      e.preventDefault();
      var product_cat = $('#product_cat').val().trim();
      var prod_id = $('#update_id').val();
      err_product_name = false;
      err_page_url = false;
      err_monthly_price = false;
      err_annual_price = false;
      err_sku = false;
      err_web_space = false;
      err_band_width = false;
      err_band_width = false;
      err_free_domain = false;
      err_lt_support = false;
      err_mail_box = false;

      check_product_name();
      chek_page_url();
      check_monthly_price ();
      check_annaul_price();
      check_sku();
      check_web_space();
      check_band_width();
      check_free_domain();
      check_lt_support();
      check_mail_box();
      var action = 'update_products';
      id = $('#update_id').val();  
      if(err_product_name == false && err_page_url == false && err_monthly_price == false && err_annual_price == false && err_sku == false && err_web_space == false && err_band_width == false && err_band_width == false && err_free_domain == false && err_lt_support == false && err_mail_box == false) {
      // $('#create_new').prop("disabled", false);   
      features_data = {'Web_Space':web_space, 'Band_Width':band_width,'Free_Domain':free_domain, 'lts':lt_support, 'Mailbox':mail_box};
          var action = 'Update_product';
          $.ajax({
            url : '../ajaxaction.php',
            type : 'post',
            data : {action:action,prod_id:prod_id,id:product_cat,name:product_name,url:page_url,mprice:monthly_price,yprice:annual_price,sku:sku,data:features_data},
            success : function(data) {
              if(data==0) {
                alert("Product Data Updated Successfully!!");
                show_product_table();
              } else {
                alert(data);
              }             
            }   
          });
    } else {
      alert("SOME CONCERN");
    } 
    });
  });
  });
  </script>

