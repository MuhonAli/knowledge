<div id="content-wrapper">
  <div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card col-md-8 offset-2">
      <div class="card-header">
        <center><i class="fas fa-plus"></i>
        Add Client</center></div>
        <div class="card-body"> 
          <?php  if($this->session->flashdata('message')){ echo $this->session->flashdata('message');}?>
          <form method="post" action="<?=base_url()?>Admin/add_client" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Company Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="company_name" placeholder="Company Name" required="">
              </div>
            </div>

            <div class="form-group row">
              <label  class="col-sm-3 col-form-label">Company Logo</label>
              <div class="col-sm-9">
                <input type="file" name="company_logo">
              </div>
            </div>

            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Company Address</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="company_address" placeholder="Company Address" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Phone Number</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Client Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="client_name" placeholder="Client Name" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="email" placeholder="Email" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Account Payable Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="account_payable_email" placeholder="Account Payable Email" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Set Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password" placeholder="Set Password" required="">
              </div>
            </div>
            <br>


            <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label"></label>
              <div class="col-sm-9">
                <input type="submit" name="submit" class="btn btn-info btn-lg btn-block">
              </div>
            </div>
          </form>      
        </div>
      </div>
