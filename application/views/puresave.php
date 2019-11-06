
      <div class="main-panel">
        <div class="content-wrapper">
          
      
       
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
               <!--   <button>Add Users</button><br>-->
               <div class="row"><div class="col-md-3">  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                      <i class="mdi mdi-account"></i>                      
                      Deposit
                    </button></div> <div class="col-md-3">  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                      <i class="mdi mdi-account"></i>                      
                      Withdraw
                    </button></div></div>
                <br><br>
                 <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
       <form class="form-sample" action="<?php echo base_url();?>members/post_register" method="post">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="lname" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                           <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="Male" checked>
                               Male
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="Female">
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="date" name="dob" class="form-control" placeholder="dd/mm/yyyy"/ required="">
                          </div>
                        </div>
                      </div>
                    </div>
                      <p class="card-description">
                      Account Details
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Account Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="account" required="">
                              <option>Category1</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                     <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Account Number</label>
                          <div class="col-sm-9">
                            <input name="accountnumber" type="text" class="form-control" readonly="" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Address
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 1</label>
                          <div class="col-sm-9">
                            <input name="address" type="text" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profile Photo</label>
                          <div class="col-sm-9">
                            <input name="photo" type="file" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input name="phono" type="text" class="form-control" required="" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email (Optional)</label>
                          <div class="col-sm-9">
                            <input name="email" type="text" class="form-control" />
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
           <input type="submit"  class="btn btn-success" name="save" value="Register Memeber">
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
   