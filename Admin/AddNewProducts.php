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
    <div class="container mt--5 pb-5 mb-5 ">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-2 pl-5 pr-5">
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
                <p>Page URL</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="URL" type="text" id='page_url'>
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
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4" id="create_new">Create New</button>
                </div>
              </form>
              
            </div>
          </div>
      </div>
    </div>
  </div>

      <!-- Footer -->
    <?php require 'footer_admin.php';?>
<script>
$(document).ready(function(){
  $('#create_new').prop("disabled", true );
  var action = "fatched_hosting_category";
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
    var letter = /^([a-zA-Z0-9-]+\s?)*$/;
    var url = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    var number = /^[0-9]+$/;
    var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
 
  var product_name;
  var page_url;
  var monthly_price;
  var annual_price;
  var sku;
  var web_space;
  var band_width;
  var band_width;
  var free_domain;
  var lt_support;
  var mail_box;
  var temp = [];
  $('#product_name').focusout(function(){
  product_name = $('#product_name').val().trim();
  if(!(product_name.match(letter))) {
      $('#product_name_err').html("Product Name is not in Proper way!!!");
      $('#product_name').focus();
      temp.push("false");
  }else if(!isNaN(product_name)) {
    $('#product_name_err').html("Only Numbers are not allowed");
  } else {
    $('#product_name_err').html("");
  }
  enabel_submit();
});
// page url validation
  $('#page_url').focusout(function(){
  page_url = $('#page_url').val().trim();
  if(!(page_url.match(url))) {
      $('#page_url_err').html("URL is not in Proper way!!!");
      $('#page_url').focus();
     temp.push("false");
  } else {
    $('#page_url_err').html("");
  }
  enabel_submit();
});
// monthly  price validation
$('#monthly_price').focusout(function(){
  monthly_price = $('#monthly_price').val().trim();
  if(!(monthly_price.match(number))) {
      $('#monthly_price_err').html("Monthly Price  is not in Proper way!!!");
      $('#monthly_price').focus();
     temp.push("false");
  } else if(monthly_price > 15) {
    $('#monthly_price_err').html("More Then 15 are not allowed");
  } 
  else {
    $('#monthly_price_err').html("");
  }
  enabel_submit();
});
// annual price validation
$('#annual_price').focusout(function(){
  annual_price = $('#annual_price').val().trim();
  if(!(annual_price.match(number))) {
      $('#annual_price_err').html("Annual Price  is not in Proper way!!!");
      $('#annual_price').focus();
     temp.push("false");
    } else if(annual_price > 15) {
    $('#annual_price_err').html("More Then 15 are not allowed");
    } 
    else {
      $('#annual_price_err').html("");
    }
  enabel_submit();
});
// sku validation
$('#sku').focusout(function(){
  sku = $('#sku').val().trim();
  if(!(sku.match(/^([a-zA-Z-#]+\s?)*$/))) {
      $('#sku_err').html("SKU is not in Proper way!!!");
      $('#sku').focus();
     temp.push("false");
  }
   else {
    $('#sku_err').html("");
  }
  enabel_submit();
});
// web_space validation
$('#web_space').focusout(function(){
  web_space = $('#web_space').val().trim();
  if(!(web_space.match(number))) {
      $('#web_space_err').html("Only numeric value is acceptable");
      $('#web_space').focus();
     temp.push("false");
  } else if(web_space > 5)  {
      $('#web_space_err').html("Web Space should less than 5");
      $('#web_space').focus();
  }
  else {
    $('#web_space_err').html("");
  }
  enabel_submit();
});
// band_width validation
$('#band_width').focusout(function(){
  band_width = $('#band_width').val().trim();
  if(!(band_width.match(number))) {
      $('#band_width_err').html("Only numeric value is acceptable");
      $('#band_width').focus();
     temp.push("false");
  } else if(band_width > 5) {
      $('#band_width_err').html("band_width should less than 5!!!");
      $('#band_width').focus();
  } 
  else {
    $('#band_width_err').html("");
  }
  enabel_submit();
});
//free_domain validation 
$('#free_domain').focusout(function(){
  free_domain = $('#free_domain').val().trim();
  if((!(free_domain.match(number)))|| (!(free_domain.match(/^([a-zA-Z]+\s?)*$/)))) {
      $('#free_domain_err').html("Value should pure numeric or pure alphabetic");
      $('#free_domain').focus();
     temp.push("false");
  }
  else {
    $('#free_domain_err').html("");
  }
  enabel_submit();
});
// lt validation
$('#lt_support').focusout(function(){
  lt_support = $('#lt_support').val().trim();
  if(!(lt_support.match(/^([a-zA-Z0-9,]+\s?)*$/))) {
      $('#lt_support_err').html("lt_support would only contin alpha/alphanumeric");
      $('#lt_support').focus();
     temp.push("false");
  } else { 
    $('#lt_support_err').html("");
  }
  enabel_submit();
});
//gmail validation
$('#mail_box').focusout(function(){
  mail_box = $('#mail_box').val().trim();
  if(!(mail_box.match(email))) {
      $('#mail_box_err').html("mail_box is not in Proper way!!!");
      $('#mail_box').focus();
     temp.push("false");
  } else {
    $('#mail_box_err').html("");
  }
  enabel_submit();
});
function enabel_submit() {
  if(temp.length > 0) {
    $('#create_new').prop("disabled", true );
    temp.pop();
  } else {
    $('#create_new').prop("disabled", false );   
  }
}
console.log(temp);
// code for insert the whole product data in two table using single ajax
  $(document).on('click','#create_new', function(e){ 
    e.preventDefault();  
    var product_cat = $('#product_cat').val().trim();
    if (product_cat ==''|| product_name ==''|| monthly_price ==''|| annual_price ==''|| sku ==''|| web_space ==''|| band_width ==''|| free_domain ==''|| lt_support ==''|| mail_box =='') {
        alert("marks with '*' symbols are required" );
  } else {  
      features_data = {'Web_Space':web_space, 'Band_Width':band_width,'Free_Domain':free_domain, 'lts':lt_support, 'Mailbox':mail_box};
          var action = 'Insert_multiple';
          $.ajax({
            url : '../ajaxaction.php',
            type : 'post',
            data : {action:action,id:product_cat,name:product_name,url:page_url,mprice:monthly_price,yprice:annual_price,sku:sku,data:features_data},
            success : function(data) {
              if(data==0) {
                alert("Product Inserted Successfully!!");
              }
            } 
          });
  }
});

});


</script>