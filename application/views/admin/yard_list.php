

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      Yard List of <strong><?=$clients[0]['company_name']?></strong></div>

   <div class="col-md-4 offset-4"><br>
     <center><a style="color: white;" type="button"  class="btn btn-info" data-toggle="modal" data-target="#add_yard"><i class="fas fa-plus"></i> Add Yard</a></center>
   </div>
      <div class="card-body">
        <div class="table-responsive">

          <?php  if($this->session->flashdata('message')){
            
           echo $this->session->flashdata('message');
         }
         
         ?>
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Yard Address</th>
              <th>Phone Number</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           
            <?php  $count=1; foreach($yards as $yard){ ?>
            <tr>
              <td><?=$count?></td>
              <td><?=$yard['yard_address']?></td>
              <td><?=$yard['yard_phone_number']?></td>
              <td><a data-toggle="modal" data-target="#update_yard-<?=$yard['id']?>" title="Edit"><i class="fa fa-edit"></i> </a> <a href="<?=base_url()?>Admin/delete_yard/<?=$yard['id']?>" title="Delete"><i class="fa fa-trash"></i></a> </td>
            </tr>


            <!-- add yard -->
            <div class="modal fade" id="add_yard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Yard</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?=base_url()?>Admin/add_yard/<?=$clients[0]['id']?>">
                      <input class="form-control" type="text" name="yard_address" placeholder="Yard Address" required><br>
                      <input class="form-control" type="text" name="yard_phone_number" placeholder="Yard Phone Number" required><br>
                      <input type="submit" name="submit" class="btn btn-info btn-block">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" name="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>

<!-- update yard -->
            <!-- add yard -->
            <div class="modal fade" id="update_yard-<?=$yard['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Yard</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?=base_url()?>Admin/update_yard/<?=$yard['id']?>">
                      <input class="form-control" type="text" name="yard_address" placeholder="Yard Address" value="<?=$yard['yard_address']?>" required><br>
                      <input class="form-control" type="text" value="<?=$yard['yard_phone_number']?>" name="yard_phone_number" placeholder="Yard Phone Number" required><br>
                      <input type="submit" name="submit" class="btn btn-info btn-block">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" name="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

            <?php $count++;   }?>
            
          </tbody>
        </table>
      </div>
    </div>
    
  </div>

  
</div>
<!-- /.container-fluid -->


