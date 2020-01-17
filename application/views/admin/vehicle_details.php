

    <div id="content-wrapper">

      <div class="container-fluid">

    

        <!-- DataTables Example -->
        <div class="card col-md-6 offset-3">
          <div class="card-header">
            <center><i class="fas fa-table"></i>
             Vehicle Details</center></div>
          <div class="card-body">
            <div class="table-responsive">

            <?php  if($this->session->flashdata('message')){
        
                   echo $this->session->flashdata('message');
                 }
      
              ?>


  <ul class="list-group list-group-flush">
    <li class="list-group-item">ID : <strong><?=$vehicle[0]['id']?></strong></li>
    <li class="list-group-item">Make : <strong><?=$vehicle[0]['VehicleMake']?></strong></li>
    <li class="list-group-item">Model : <strong><?=$vehicle[0]['VehicleModel']?></strong></li>
    <li class="list-group-item">Colour : <strong><?=$vehicle[0]['VehicleColour']?></strong></li>
    <li class="list-group-item">Country : <strong><?=$vehicle[0]['VehicleCountry']?></strong></li>
    <li class="list-group-item">Provience : <strong><?=$vehicle[0]['VehicleProvience']?></strong></li>
    <li class="list-group-item">State : <strong><?=$vehicle[0]['VehicleState']?></strong></li>
    <li class="list-group-item">Plate No : <strong><?=$vehicle[0]['VehiclePlate']?></strong></li>
    <li class="list-group-item">VIN No : <strong><?=$vehicle[0]['VehicleVIN']?></strong></li>
    <li class="list-group-item">Reg Date : <strong><?=$vehicle[0]['RegistrationDate']?></strong></li>
    <li class="list-group-item">Yard Status : <strong><?=$vehicle[0]['yardStatus']?></strong>
      <?php if($this->session->userdata('admin_id') || (!empty($this->session->userdata('client_id')) && $this->session->userdata('client_id')==$vehicle[0]['client_Id']) ){   ?>
      <a href="" data-toggle="modal" data-target="#change_status">Change</a></li>
      <?php } ?>
<?php 
    $yard = $this->db->select('*')->from('yard')->where('id',$vehicle[0]['yardID'])->get()->result_array();
    if ($yard) { ?>
    <li class="list-group-item">Yard Address : <strong><?=$yard[0]['yard_address']?></strong><?php if(!empty($this->session->userdata('client_id')) && $this->session->userdata('client_id')==$vehicle[0]['client_Id']){   ?>
      <a href="" data-toggle="modal" data-target="#change_yard">Change</a></li>
      <?php } ?>
    <li class="list-group-item">Yard Phone : <strong><?=$yard[0]['yard_phone_number']?></strong></li>
    <?php } ?>

    <li class="list-group-item"><center><div class="btn-group">
  <?php if($this->session->userdata('admin_id')){ ?>
  <button type="button" class="btn btn-primary"><?php if ($vehicle[0]['claimed']==1) { ?>
    <a style="color: white;" href="<?=base_url()?>Admin/vehicle_unclaimed/<?=$vehicle[0]['id']?>">Marked As Unclaimed</a>
  <?php  } else{ ?><a style="color: white;" href="<?=base_url()?>Admin/vehicle_claimed/<?=$vehicle[0]['id']?>">Marked As Claimed</a> <?php } ?></button>

  <button type="button" class="btn btn-info"><?php if ($vehicle[0]['accountsR']=='PAID') { ?>
    <a style="color: white;" href="<?=base_url()?>Admin/vehicle_unpaid/<?=$vehicle[0]['id']?>">Marked As Unpaid</a>
  <?php  } else{ ?><a style="color: white;" href="<?=base_url()?>Admin/vehicle_paid/<?=$vehicle[0]['id']?>">Marked As Paid</a> <?php } ?>
</button>
<?php }  ?>

  <?php if (!empty($this->session->userdata('client_id')) && $this->session->userdata('client_id')==$vehicle[0]['client_Id']) { ?>
<button class="btn btn-primary btn-block">

     <a style="color: white;" href="<?=base_url()?>Clients/edit_vehicle/<?=$vehicle[0]['id']?>">Edit</a>
</button>
<?php } ?>
</div></center></li>
  </ul>


<!-- email update -->
<div class="modal fade" id="change_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Yard Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if($this->session->userdata('admin_id')){ ?>
      <form method="post" action="<?=base_url()?>Admin/vehicle_status/<?=$vehicle[0]['id']?>">
        <?php } else if (!empty($this->session->userdata('client_id')) && $this->session->userdata('client_id')==$vehicle[0]['client_Id']) { ?>
      <form method="post" action="<?=base_url()?>Clients/vehicle_status/<?=$vehicle[0]['id']?>">
        <?php } ?>
        <select name="yardStatus" class="form-control">
  <option value="STORED"  >STORED</option>
  <option value="RECOVERED" >RECOVERED</option>

</select><br>
        <input type="submit" name="submit" class="btn btn-info btn-block">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- email update -->
<div class="modal fade" id="change_yard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Click to select yard</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php   $yards = $this->db->select('*')->from('yard')->where('client_id',$this->session->userdata('client_id'))->get()->result_array(); ?>
      <div class="modal-body">
        <?php foreach ($yards as $yard) { ?>
        <li><a title="SELECT" href="<?=base_url()?>Clients/change_yard/<?=$vehicle[0]['id']?>/<?=$yard['id']?>"><?=$yard['yard_address']?></a></li>
    <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- phone number update -->
<div class="modal fade" id="change_phone_number" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Phone Number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?=base_url()?>vehicle/change_phone_number/<?=$vehicle[0]['id']?>">
        <input class="form-control" type="text" name="phone" value="<?=$vehicle[0]['phone']?>" required><br>
        <input type="submit" name="submit" class="btn btn-info btn-block">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<!-- password update -->
<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?=base_url()?>vehicle/change_password/<?=$vehicle[0]['id']?>">
        <input class="form-control" type="password" name="password" placeholder="enter password" required><br>
        <input type="submit" name="submit" class="btn btn-info btn-block">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div></div>


          </div>
      
        </div>

  
      </div>
      <!-- /.container-fluid -->


