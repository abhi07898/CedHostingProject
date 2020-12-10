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
                    <input class="form-control text-center" placeholder="URL" type="text" id='url'>
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
