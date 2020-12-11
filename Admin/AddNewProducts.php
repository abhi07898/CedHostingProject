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
                    <select name="" id='product_cat'  class="form-control text-center">
                      <option value=""></option>
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
                </div>
                <div class="form-group">
                <p>Page URL</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="URL" type="text" id='page_url'>
                  </div>
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
                </div>
                <div class="form-group">
                <p>Enter Annual Price * </p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Ex- 240$" type="number"  id='annual_price' required>
                  </div>
                </div>
                <div class="form-group">
                <p>SKU *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="" type="text" id='sku' required>
                  </div>
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
                </div>
                <div class="form-group">
                <p>Band Width (in GB) *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Enter 0.5 for 512MB" type="text" id='band_width' required>
                  </div>
                </div>
                <div class="form-group">
                <p>Free Domain *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Enter 0 if no domain available in this service" type="text" id='free_domain' required>
                  </div>
                </div>
                <div class="form-group">
                <p>Language/ technology Support *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Ex - PHP, MYsQl , MongoDB" type="text" id='lt_support' required>
                  </div>
                </div>
                <div class="form-group">
                <p>Mailbox *</p>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                    </div>
                    <input class="form-control text-center" placeholder="Enter Number of mailbox will be provided, enter 0 if none " type="text" id='mail_box' required>
                  </div>
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
  var action = "fatched_hosting_category";
  $.ajax({
    url: '../ajaxaction.php',
    type : 'post',
    dataType : 'json',
    data : {action:action},
    success : function(data) {
      html = '';
      for(var i=0; i<data.length; i++) {
        html+= "<option value="+data[i]['id']+">"+data[i]['prod_name']+"</option>";    
      }
      $('#product_cat').html(html);
    }
  });
  $(document).on('click','#create_new', function(e) {
    e.preventDefault();
    var letter = /^([a-zA-Z]+\s?)*$/;
    var url = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    var number = /^[0-9]+$/;
    var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    product_cat = $('#product_cat').val();
    product_name = $('#product_name').val();
    page_url = $('#page_url').val();
    monthly_price = $('#monthly_price').val();
    annual_price = $('#annual_price').val();
    sku = $('#sku').val();
    web_space = $('#web_space').val();
    band_width = $('#band_width').val();
    free_domain = $('#free_domain').val();
    lt_support = $('#lt_support').val();
    mail_box = $('#mail_box').val();
    create_new = $('#create_new').val();
    // if (product_cat ==''|| product_name ==''|| monthly_price ==''|| annual_price ==''|| sku ==''|| web_space ==''|| band_width ==''|| free_domain ==''|| lt_support ==''|| mail_box =='') {
    //   alert("marks with '*' symbols are required" );
    // } else if(!(product_name.match(letter))) {
    //   alert("Product Name is not in Proper way!!!");
    //   $('#product_name').focus();
    // } else if(!(page_url.match(url))) {
    //   alert("Page URL is not in Proper way!!!");
    //   $('#page_url').focus();
    // } else if(!(monthly_price.match(number))) {
    //   alert("monthly Price is not a number!!!");
    //   $('#monthly_price').focus();
    // } else if(!(annual_price.match(number))) {
    //   alert("Annual Price is not a number!!!");
    //   $('#annual_price').focus();
    // } else if(!(sku.match(letter))) {
    //   alert("SKU is not in proper way!!!");
    //   $('#sku').focus();
    // } else if(!(web_space.match(number))) {
    //   alert("web_space is not a number!!!");
    //   $('#web_space').focus();
    // } else if(!(band_width.match(letter))) {
    //   alert("band_width is not in proper way!!!");
    //   $('#band_width').focus(); 
    // } else if(!(free_domain.match(letter))) {
    //   alert("free_domain is not in proper way!!!");
    //   $('#free_domain').focus(); 
    // } else if(!(lt_support.match(letter))) {
    //   alert("lt_support is not in proper way!!!");
    //   $('#lt_support').focus(); 
    // } else if(!(mail_box.match(email))) {
    //   alert("mail_box is not in proper way!!!");
    //   $('#mail_box').focus(); 
    // } else {
      // alert(product_cat);
      features_data = {'Web_Space':web_space, 'Band_Width':band_width,'Free_Domain':free_domain, 'lts':lt_support, 'Mailbox':mail_box};
      // features_data_json = json_encode(features_data);
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
    // }
  }); 
});
</script>