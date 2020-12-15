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
 $('#create_new').prop("disabled", false);
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
  if(!(page_url.match(url))) {
      $('#page_url_err').html("URL is not in Proper way!!!");
      $('#page_url').focus();
      err_page_url = true;
  } else {
    err_page_url = false;
    $('#page_url_err').html("");
  } 
  validate_error();
}
// function for check monthly_price
function check_monthly_price () {
  monthly_price = $('#monthly_price').val().trim();
  if(monthly_price == '') {
    $('#monthly_price_err').html("Monthly Price is Required!!!");
    $('#monthly_price').focus();
    err_monthly_price = true;
  } else if(!(monthly_price.match(/^[0-9]*\.?[0-9]*$/))) {
      $('#monthly_price_err').html("Monthly Price  is not in Proper way!!!");
      $('#monthly_price').focus();
      err_monthly_price = true;
  } else if(monthly_price.length > 15) {
    $('#monthly_price_err').html("More Then 15 digit are not allowed");
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
    $('#annual_price_err').html("More Then 15 digit are not allowed");
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
      $('#web_space_err').html("Length should be less than 6!!!");
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
}
// code for insert the whole product data in two table using single ajax
  $(document).on('click','#create_new', function(e){ 
    e.preventDefault();  
    var product_cat = $('#product_cat').val().trim();
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
    
    alert(err_product_name);
    if(err_product_name == false && err_page_url == false && err_monthly_price == false && err_annual_price == false && err_sku == false && err_web_space == false && err_band_width == false && err_band_width == false && err_free_domain == false && err_lt_support == false && err_mail_box == false) {  
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
    } else { 
      alert("SOME CONCERN");
    }
 });
});
</script>