

    <div id="content-wrapper">

      <div class="container-fluid">

<br><br><br>    

        <!-- DataTables Example -->
        <div class="card col-md-6 offset-3">

  <?php  if($this->session->flashdata('message')){ echo $this->session->flashdata('message');} ?>


          <a href="<?=base_url()?>Admin/vehicle_list/STORED">
            <div class="card-header">
            <i class="fas fa-table"></i>
             STORED VEHICLES
             <i class="fas fa-arrow-right" style="float: right;"></i>
          </div>
          </a>

   

          <a href="<?=base_url()?>Admin/claimed_vehicle/CLAIMED">
            <div class="card-header">
            <i class="fas fa-trash"></i>
             CLAIMED VEHICLES
             <i class="fas fa-arrow-right" style="float: right;"></i>
          </div>
          </a>
     
          <a href="<?=base_url()?>Admin/archive_vehicle/ARCHIVED">
            <div class="card-header">
            <i class="fas fa-archive"></i>
             ARCHIVED VEHICLES
             <i class="fas fa-arrow-right" style="float: right;"></i>
          </div>
          </a>
  

   


            </div>
          </div>
      
