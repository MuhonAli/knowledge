

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card col-md-6 offset-3">
      <div class="card-header">
        <center><i class="fas fa-table"></i>
        Client profile</center></div>
        <div class="card-body">
          <div class="table-responsive">

            <?php  if($this->session->flashdata('message')){  echo $this->session->flashdata('message'); } ?>

            <ul class="list-group list-group-flush">
              <li> <center><img class="img-responsive" style="max-width: 200px;" src="<?=base_url()?>images/<?=$client[0]['company_logo']?>"></center></li><br>
              <li class="list-group-item">Client name : <strong><?=$client[0]['client_name']?></strong> <a  data-toggle="modal" data-target="#change_information"><i class="fas fa-edit" style="float: right;"></i></a></li>

              <li class="list-group-item">Company name : <strong><?=$client[0]['company_name']?></strong> <a  data-toggle="modal" data-target="#change_information"><i class="fas fa-edit" style="float: right;"></i></a></li>

              <li class="list-group-item">Company address : <strong><?=$client[0]['company_address']?></strong> <a  data-toggle="modal" data-target="#change_information"><i class="fas fa-edit" style="float: right;"></i></a></li>
              <li class="list-group-item">Phone number : <strong><?=$client[0]['phone_number']?></strong> <a  data-toggle="modal" data-target="#change_information"><i class="fas fa-edit" style="float: right;"></i></a></li>
              <li class="list-group-item">Email : <strong><?=$client[0]['email']?></strong> <a  data-toggle="modal" data-target="#change_information"><i class="fas fa-edit" style="float: right;"></i></a></li>
              <li class="list-group-item">Account payable email : <strong><?=$client[0]['account_payable_email']?></strong> <a  data-toggle="modal" data-target="#change_information"><i class="fas fa-edit" style="float: right;"></i></a></li>
              <li class="list-group-item">Password : <strong> <i>password hidden</i></strong> <a  data-toggle="modal" data-target="#change_information"><i class="fas fa-edit" style="float: right;"></i></a></li>
<?php   $yards = $this->db->select('*')->from('yard')->where('client_id',$client[0]['id'])->get()->num_rows(); ?>
               <li class="list-group-item">Yards : <a href="<?=base_url()?>Admin/yard_list/<?=$client[0]['id']?>" title="Details"> <strong><?php echo $yards; ?> Added</strong></a></li>
            </ul>


            <!-- email update -->
            <div class="modal fade" id="change_information" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document" style="margin-top: 4%;">
                <div class="modal-content">
                  <div class="modal-header">
                    <br>
                    <h5 class="text-center">Update Inforamation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?=base_url()?>Clients/change_information/<?=$client[0]['id']?>" enctype="multipart/form-data">


                     <div class="form-group row">
                      <label  class="col-sm-3" >Change Logo</label>
                      <div class="col-sm-9">
                        <input type="file"  name="company_logo">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-3 col-form-label" >Client name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="client_name" value="<?=$client[0]['client_name']?>" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-3 col-form-label" >Company name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="company_name" value="<?=$client[0]['company_name']?>" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-3 col-form-label" >Company address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="company_address" value="<?=$client[0]['company_address']?>" required>
                      </div>
                    </div>



                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-3 col-form-label" >Phone number</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="phone_number" value="<?=$client[0]['phone_number']?>" required>
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-3 col-form-label" >Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" value="<?=$client[0]['email']?>" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-3 col-form-label" >Account payable email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="account_payable_email" value="<?=$client[0]['account_payable_email']?>" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-3 col-form-label" >New Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" placeholder="Enter new password" value=""> <br>
                        <input type="submit" name="submit" class="btn btn-info btn-block">
                      </div>

                    </div>


                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


        </div>


    
      </div>

    </div>

<!-- yard list -->

  </div>
  <!-- /.container-fluid -->


  <style type="text/css">
  body .modal-ku {
    width: 750px;
    margin: auto;
  }
</style>