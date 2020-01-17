

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      vehicle List</div>
      <div class="card-body">
        <div class="table-responsive">

          <?php  if($this->session->flashdata('message')){

           echo $this->session->flashdata('message');
         }

         ?>
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Vehicle ID</th>
              
              <th>Make</th>
              <th>Model</th>
              <th>Colour</th>
              <th>Plate</th>
              <th>VIN</th>
              <th>accountsR</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>

            <?php  $count=1; foreach($vehicles as $vehicle){ ?>
            <tr>
              
              <td><?=$vehicle['id']?></td>
              
              <td><?=$vehicle['VehicleMake']?></td>
              <td><?=$vehicle['VehicleModel']?></td>
              <td><?=$vehicle['VehicleColour']?></td>
              <td><?=$vehicle['VehiclePlate']?></td>
              <td><?=$vehicle['VehicleVIN']?></td>
              <td>
                <?=$vehicle['accountsR']?></td>
              
              <td><a href="<?=base_url()?>Admin/vehicle_details/<?=$vehicle['id']?>">view</a></td>

            <!-- password update -->
            <div class="modal fade" id="set_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Set Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?=base_url()?>Admin/change_password/<?=$vehicle['id']?>">
                      <input class="form-control" type="password" name="password" placeholder="Enter password" required><br>
                      <input type="submit" name="submit" class="btn btn-info btn-block">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                  </div>
                </div>
              </div>
            </div></div>

            <?php $count++;   }?>

          </tbody>
        </table>
      </div>
    </div>

  </div>

  
</div>
<!-- /.container-fluid -->


