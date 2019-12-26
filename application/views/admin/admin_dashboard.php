 <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Dashboard
        <small> Daily Shop Statistics </small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                 <colgroup>
                        <col>
                        <col width="100">
                    </colgroup>    
                <tr>
                  <th>Summary</th>
                  <th>Results</th>
                </tr>
  
                 <tr>
                  <td>Total Products</td>
                  <td><?=$total_products?></td>
                </tr> 
                    
    

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                 <colgroup>
                    <col>
                    <col width="100">
                </colgroup>    
                <tr>
                  <th>Summary</th>
                  <th>Result</th>
                </tr>
                    
                <tr>
                  <td>Total Category</td>
                  <td><?=$total_categories?></td>
                </tr> 

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Order Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                 <colgroup>
                        <col>
                        <col width="100">
                    </colgroup>    
                <tr>
                  <th>Summary</th>
                  <th>Results</th>
                </tr>
                    
                <tr>
                  <td>Total Order</td>
                  <td><?=$total_orders?></td>
                </tr> 

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
            
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Message Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                    <colgroup>
                        <col>
                        <col width="100">
                    </colgroup>
                    <tr>
                      <th>Summary</th>
                      <th>Results</th>
                    </tr>

                    <tr>
                      <td>Total Message</td>
                      <td><?=$total_contact?></td>
                    </tr> 

              </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->     
            
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                    <colgroup>
                        <col>
                        <col width="150">
                    </colgroup>
                    <tr>
                      <th>Summary</th>
                      <th>Total User</th>
                    </tr>

                    <tr>
                      <td>User</td>
                      <td><?=$total_users?></td>
                    </tr> 

              </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->  
           
      
            
        </div><!--end col-->
          
        <div class="col-md-6">
           
          
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Last 10 Members</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="lasttenmembertable table table-hover">
                    <tbody>
                        <colgroup>
                            <col>
                            <col width="200">
                        </colgroup>
<?php foreach($users as $user) { ?>
                        <tr>
                          <th><?=$user['username']?></th>
                          <th><?=$user['email']?></th>
                        </tr> 
<?php } ?>
                  </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
              </div>
          
        </div>  
          
          
      </div>
      <!-- /.row -->
      <!-- Main row -->


    </section>
    <!-- /.content -->
  </div>