<div class="modal fade" id="register_contestant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Contestant</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
      <div class="col-6">
       <div class="card card-secondary">
        <div class="card-header">
                <h5 style="text-align:center;">Register</h5>
               
        </div>
       </div>
      </div>
      <div class="col-6">
        <div class="card card-info" style="color:white;">
        <div class="card-header">
                <h5 style="text-align:center;">Search Contestant</h5>
              </div>
        </div>
      </div>
    </div>
          <div class="row">
            <div class="col-6">
                <div class="row">
                  <div class="col-6">
                    <label>Contestant Name:</label>
                    <input type="hidden" id="id_contestant">
                    <input type="text" id="contestant_name" class="form-control" autocomplete="off">
                  </div>
                  <div class="col-6">
                    <label>Gender:</label>
                    <select id="gender_register" class="form-control">
                      <option value="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="gay">Gay</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <hr>
                   <div class="col-6">
                    <p style="text-align:left;">
                      <a href="#" class="btn btn-secondary" onclick="update_contestant()">Update Contestant</a>
                    </p>
                  </div>
                  <div class="col-6">
                    <p style="text-align:right;">
                      <a href="#" class="btn btn-primary" onclick="register_contestant()">Register Contestant</a>
                    </p>
                  </div>
                </div> 
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-5">
                  <label>Contestant Name:</label>
                  <input type="text" id="contestant_name_search" class="form-control" autocomplete="off">
                </div>
                <div class="col-4">
                  <label>Gender:</label>
                  <select id="gender_search" class="form-control">
                      <option value="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="gay">Gay</option>
                    </select>
                </div>
                <div class="col-3">
                  <div class="float-right">
                  <a href="#" class="btn btn-primary" onclick="search_contestant_admin()">Search</a>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                   <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap table-hover" id="">
                        <thead style="text-align:center;">
                        <th>#</th>
                        <th>Contestant Name</th>
                        <th>Gender</th>
                        </thead>
                        <tbody id="contestant_list_admin" style="text-align:center;"></tbody>
                    </table>
                    <div class="row">
                <div class="col-6"></div>
                    <div class="col-6">   
                      <div class="spinner" id="spinner" style="display:none;">
                        <div class="loader float-sm-center"></div>    
                      </div>
                    </div>
                </div>
                        </div>
                        </div>
              </div>
            </div>
          </div> 

        </div>
      </div>
    </div>
  </div>
</div>