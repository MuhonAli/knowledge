

    <div id="content-wrapper">

      <div class="container-fluid">

<br><br><br>    

        <!-- DataTables Example -->
        <div class="card col-md-6 offset-3">

  <?php  if($this->session->flashdata('message')){ echo $this->session->flashdata('message');} ?>


          <a href="<?=base_url()?>Admin/client_list">
            <div class="card-header">
            <i class="fas fa-table"></i>
             CLIENTS
             <i class="fas fa-arrow-right" style="float: right;"></i>
          </div>
          </a>

   

          <a href="<?=base_url()?>Admin/suspend_list">
            <div class="card-header">
            <i class="fas fa-trash"></i>
             SUSPENDED CLIENTS
             <i class="fas fa-arrow-right" style="float: right;"></i>
          </div>
          </a>
     
          <a href="<?=base_url()?>Admin/archive_list">
            <div class="card-header">
            <i class="fas fa-archive"></i>
             ARCHIVED CLIENTS
             <i class="fas fa-arrow-right" style="float: right;"></i>
          </div>
          </a>
          <a href="<?=base_url()?>Admin/add_client">
            <div class="card-header">
            <i class="fas fa-plus"></i>
             ADD CLIENT
             <i class="fas fa-arrow-right" style="float: right;"></i>
          </div>
          </a>

          <a href="<?=base_url()?>Admin/vehicles">
            <div class="card-header">
            <i class="fas fa-car"></i>
             VEHICLES
             <i class="fas fa-arrow-right" style="float: right;"></i>
          </div>
          </a>

          <a href="">
            <div class="card-header">
            <i class="fas fa-envelope-open-text"></i>
             INVOICES
             <i class="fas fa-arrow-right"  style="float: right;"></i>
          </div>
          </a>

          <a href="">
            <div class="card-header">
            <i class="fas fa-search"></i>
             SEARCH
             <i class="fas fa-arrow-right"  style="float: right;"></i>
          </div>
          </a>

            </div>
          </div>
      
