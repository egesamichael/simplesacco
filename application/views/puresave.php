
      <div class="main-panel">
        <div class="content-wrapper">
          
      
       
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
               <!--   <button>Add Users</button><br>-->
               <div class="row"><div class="col-md-3">  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#Deposit">
                      <i class="mdi mdi-account"></i>                      
                      Deposit
                    </button></div> <div class="col-md-3">  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#Withdraw">
                      <i class="mdi mdi-account"></i>                      
                      Withdraw
                    </button></div></div>
                <br><br>
                 <!-- The Modal -->
  <div class="modal" id="Deposit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Deposit on Pure Save Account</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
       <form class="form-sample" action="<?php echo base_url();?>members/post_register" method="post">
                    <p class="card-description">
                      Deposit Details 
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Account Number</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Amount</label>
                          <div class="col-sm-9">
                            <input type="text" name="lname" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">depositors Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo date('d/m/Y'); ?>" name="date" class="form-control" readonly="" />
                          </div>
                        </div>
                      </div>
                    </div>
                   
                   
                 <!--   <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>America</option>
                              <option>Italy</option>
                              <option>Russia</option>
                              <option>Britain</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>-->

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
           <input type="submit"  class="btn btn-success" name="save" value="Deposit">
                  </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
</div></div></div>
                       <!-- The Modal -->
  <div class="modal" id="Withdraw">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Withdraw on Pure Save Account</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
       <form class="form-sample" action="<?php echo base_url();?>members/post_register" method="post">
                    <p class="card-description">
                     Withdraw Details 
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Account Number</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Amount</label>
                          <div class="col-sm-9">
                            <input type="text" name="lname" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">depositors Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo date('d/m/Y'); ?>" name="date" class="form-control" readonly="" />
                          </div>
                        </div>
                      </div>
                    </div>
                   
                   
                 <!--   <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>America</option>
                              <option>Italy</option>
                              <option>Russia</option>
                              <option>Britain</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>-->

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
           <input type="submit"  class="btn btn-success" name="save" value="Withdraw">
                  </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

                  <div class="table-responsive">
                     <p class="card-title">Users <?php if (isset($num_results)) {
  echo 'There are ' . $num_results . ' returned';
}

?>
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th></th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Account</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->fname."</td>";
    echo "<td>".$row->lname."</td>";
  echo "<td>".$row->gender."</td>";
  echo "<td>".$row->account."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
   